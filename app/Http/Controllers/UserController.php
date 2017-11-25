<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        // Initialise some variables
        $name = $surname = $email = $password = $role = $voucher = "";

        // Obtain the user information
        $firstname = $request->name;
        $lastname = $request->surname;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;

        if ($role === 'student') {
            $voucher = $request->voucher;
            if ($voucher === null) {
                Log::info('Cannot register without a voucher!');
                return false;
            }
            else {
                $user = User::create([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'password' => bcrypt($password),
                    'role' => $role
                ]);
                $id = $user->id;

                $student = Students::insert([
                        'user_id' => $id,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email
                ]);
                if ($student) {
                    Log::info('Student successfully created!');
                    return $user;
                }
                else {
                    Log::info('Student could not be created');
                    return false;
                }
            }
        }
        else if ($role === 'hub') {
        } else if($role === 'endorser') {
        }
    }
}
