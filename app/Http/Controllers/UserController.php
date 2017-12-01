<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Voucher;
use App\Administrator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivateAccount;
use DB;

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

    public function register(Request $request)
    {
        // Initialise some variables
        $name = $surname = $email = $password = $role = $voucher = "";

        // Obtain the user information
        $firstname = $request->name;
        $lastname = $request->surname;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;
        $voucher = $request->voucher;

        $voucher_exists = Voucher::where('voucher', '=' , $voucher)->first();
        if(!$voucher_exists){
            return array('success' => false, 'voucher_exists' => false);
        }else{
        //Generate the activation token
        $token = "";
        $token = bin2hex(openssl_random_pseudo_bytes(16));

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

        if ($role === 'student' && $id){
                $student = Student::insertGetId([
                        'user_id' => $id,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email
                ]);
                if ($student) {
                    $admin_student = DB::table('admin_students')->insert([
                        'admin_id' => $voucher_exists->admin_id,
                        'student_id' => $student,
                        'voucher_id' => $voucher_exists->id
                    ]);
                    $email = $user->email;
                    Mail::to($email)->send(new ActivateAccount($user, $token));
                    Log::info('Student successfully created!');
                    return array('success'=> true ,'user' =>$user) ;
                }
                else {
                    Log::info('Student could not be created');
                    return array('success'=> false, 'voucher_exists' => true);
                }
        }else if ($role === 'hub' && $id)
        {

        }else if($role === 'administrator' && $id)
        {
            $administrator = Administrator::insert([
                'user_id' => $id,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email
            ]);
            if ($administrator) {
                $email = $user->email;
                Mail::to($email)->send(new ActivateAccount($user, $token));
                Log::info('Administrator successfully created!');
                return array('success'=> true ,'user' =>$user, 'voucher_exists' => true) ;
            }else {
                Log::info('Administrator could not be created');
                return array('success'=> false, 'voucher_exists' => true);
            }
        }
    }//end voucher exists
    }

    //Public function to activate user account
    public function activateAccount($token){
        $user = User::where('activation_token', '=', $token)
        ->update([
            'activated' => '1'
        ]);
        return view('auth.login');
    }
}
