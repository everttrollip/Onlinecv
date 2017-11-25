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
        $name = $surname = $email = $password = $role = $voucher = "";

        $name = $request->name;
        $surname = $request->surname;
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
                    'name' => $name,
                    'lastname' => $surname,
                    'email' => $email,
                    'password' => bcrypt($password),
                    'role' => $role
                ]);
                $id = $user->id;

                $student = Students::insert(
                    array(
                        'user_id' => $id,
                        'firstname' => $name,
                        'lastname' => $surname,
                        'voucher'=>$voucher,
                        'sports'=>0,
                        'arts'=>0
                    )
                );
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
