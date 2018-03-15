<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Hub;
use App\Voucher;
use App\Administrator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivateAccount;
use DB;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function get() {
        $user = Auth::User();
        if($user->role === 'student'){
            $user_id = $user->id;
            $student = Student::where('user_id', '=', Auth::User()->id)->first();
        }
        return $student;
    }

    public function show($id){
        $users = User::findOrFail($id);
        return $users;
    }

    public function logOut() {
        Auth::logout();
        return view('auth.login');
    }

    public function register(Request $request){
        //initialise variables
        $name = $user = $surname = $email = $password = $role = $voucher = $token = "";
        $now = Carbon::now('Africa/Johannesburg')->toDateTimeString();
        $firstname = $request->name;
        $lastname = $request->surname;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;
        $voucher = $request->voucher;
        $token = bin2hex(openssl_random_pseudo_bytes(16));

        //If student
        if($role == 'student'){
            $voucher_exists = Voucher::where('voucher', '=' , $voucher)->first();
            if(!$voucher_exists){
                return array('success' => false, 'voucher_exists' => false);
            }else{
                try{
                    DB::beginTransaction();
                    //create user
                    $user = User::create([
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                        'password' => bcrypt($password),
                        'role' => $role,
                        'activation_token' => $token,
                        'activated' => '0'
                    ]);
                    //create student
                    $subjects = 'English, Maths, Life Orientation';
                    $preferredStudyLocations = '';
                    $careerInterests = '';
                    $generalInterests = '';
                    $id = $user->id;

                    $student = Student::insertGetId([
                        'user_id' => $id,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                        'subjects' => $subjects,
                        'preferred_study_locations' => $preferredStudyLocations,
                        'career_interests' => $careerInterests,
                        'general_interests' => $generalInterests
                    ]);

                    if ($student) {
                        $admin_student = DB::table('admin_students')->insert([
                            'admin_id' => $voucher_exists->admin_id,
                            'student_id' => $student,
                            'voucher_id' => $voucher_exists->id
                        ]);

                        //Insert a credit for achievements editing
                        $credit_token = $this->generateRandomString(10);
                        $credit_token = $student . '#' . $credit_token;

                        $student_credit = DB::table('student_credits')->insert([
                            'student_id' => $student,
                            'credit_token' => $credit_token,
                            'created_at' => $now,
                            'order_id' => 0
                        ]);

                        $email = $user->email;
                        Mail::to($email)->send(new ActivateAccount($user, $token));
                        Log::info('Student successfully created!');
                    }

                    DB::commit();
                    return array('success'=> true ,'user' =>$user) ;
                }catch(QueryException $e){
                    DB::rollBack();
                    return array('success' => false, 'message' => $e);
                }
            }
        }//end student
        else if($role == 'administrator'){
                try{
                    DB::beginTransaction();
                    $user = User::create([
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                        'password' => bcrypt($password),
                        'role' => $role,
                        'activation_token' => $token,
                        'activated' => '0'
                    ]);
                    $id = $user->id;
                    $administrator = Administrator::insertGetId([
                        'user_id' => $id,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                    ]);
                    if ($administrator) {

                        $voucer_price = DB::table('voucher_prices')->insert([
                            'admin_id' => $administrator
                        ]);

                        $email = $user->email;
                        Mail::to($email)->send(new ActivateAccount($user, $token));
                        Log::info('Administrator successfully created!');
                    }
                    DB::commit();
                    return array('success'=> true ,'user' => $user, 'voucher_exists' => false) ;
                }catch(QueryException $e){
                    DB::rollBack();
                    return array('success'=> false ,'user' => $user, 'voucher_exists' => false , 'message' => $e) ;
                }
            }//end admin
            else if ($role == 'hub'){
                try{
                    DB::beginTransaction();
                    $user = User::create([
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                        'password' => bcrypt($password),
                        'role' => $role,
                        'activation_token' => $token,
                        'activated' => '0'
                    ]);
                    $id = $user->id;
                    $hub = Hub::insertGetId([
                        'user_id' => $id,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                        'company' => $request->company
                    ]);

                    $email = $user->email;
                    Mail::to($email)->send(new ActivateAccount($user, $token));
                    Log::info('Hub successfully created!');

                    DB::commit();
                    return array('success'=> true ,'user' => $user, 'voucher_exists' => false) ;
                }catch(QueryException $e){
                    DB::rollBack();
                    return array('success'=> false ,'user' => $user, 'voucher_exists' => false , 'message' => $e) ;
                }
            }
        }

    //Public function to activate user account
    public function activateAccount($token){
        $user = User::where('activation_token', '=', $token)
        ->update([
            'activated' => '1'
        ]);
        return view('auth.login');
    }

    //Generate random voucher strings
    public  function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    //Return latest users
    public function getLatestUsers(){
        $users = User::orderBy('created_at', 'DESC')->limit(4)->get();
        return $users;
    }
}
