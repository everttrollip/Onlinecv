<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Students;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


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
         $name =  $surname = $email = $password = $role  = $voucher = "";

         $name = $request->name;
         $surname = $request->surname;
         $email = $request->email;
         $password = $request->password;
         $role = $request->role;

         $user = User::create([
                'name' => $name,
                'lastname'=>$surname,
                'email' => $email,
                'password' => bcrypt($password),
                'role' => $role
            ]);
        $id = $user->id;
        if($role === 'student'){
            $voucher = $request->voucher;
            $student = Student::insert(array('user_id' => $id, 'firstname' => $name, 'lastname' => $surname, 'voucher'=>$voucher));
            if($student){
                return $user;
            }else{
                return false;
            }
        }else if($role === 'hub'){
        }else if($role === 'endorser'){}
        
    }

    
}
