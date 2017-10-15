<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role === 'student'){
            return view('student.dashboard', $user);
        }else if($user->role === 'endorser')
        { 
            return view('endorser.dashboard');
        }
    }

    public function cv()
    {
        $user = Auth::user();
        if($user->role === 'student'){
            return view('student.cv', $user);
        }else if($user->role === 'endorser')
        { 
            return view('endorser.cv');
        }
    }

    public function profile($id)
    {
        $user = Auth::user();
        if($user->role === 'student'){
            $student = DB::table('students')->where('user_id',$id)->first();
            return view('student.profile')->with('student',$student);
        }else if($user->role === 'endorser')
        { 
            return view('endorser.profile');
        }
       
    }
}
