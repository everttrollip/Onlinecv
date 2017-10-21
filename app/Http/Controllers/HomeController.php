<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        else if($user->role === 'endorser') 
        { 
            return view('endorser.dashboard');
        }
    }
}
