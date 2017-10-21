<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CvsController extends Controller
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
            return view('student.cv', $user);
        }
        else if($user->role === 'endorser') 
        { 
            return view('endorser.cv');
        }
    }
}
