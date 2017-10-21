<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) 
    {
        $user = Auth::user();
        if($user->role === 'student') 
        {
            $student = DB::table('students')->where('user_id', $id)->first();
            return view('student.profile')->with('student', $student);
        }
        else if($user->role === 'endorser') 
        { 
            return view('endorser.profile');
        }
    }
}
