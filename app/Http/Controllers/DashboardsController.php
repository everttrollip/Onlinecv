<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardsController extends Controller
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
        else if($user->role === 'endorser') // change to administrator
        {
            return view('endorser.dashboard');
        }
    }
}
