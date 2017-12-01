<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\Administrator;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        if($user->role === 'student')
        {
            return view('student.dashboard', $user);
        }
        else if($user->role === 'administrator')
        {
            return view('administrator.dashboard');
        }
        else if($user->role === 'hub')
        {
            return view('hub.dashboard');
        }
    }

    //Return the user's own profile
    public function viewMyProfile(){
        $user = Auth::user();
        if($user->role === 'administrator'){
            $user_row = Administrator::where('user_id', '=', $user->id)->first();
            return view('administrator.profile')->with('user', $user_row);
        }else if($user->role === 'student'){
            $user_row = Student::where('user_id', '=', $user->id)->first();
            return view('student.profile')->with('user', $user_row);
        }else if($user->role === 'hub'){

        }
    }
}
