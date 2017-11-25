<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::User();
        if($user->role === 'student') {
            $user_id = $user->id;
            $student = Student::where('user_id', '=', Auth::User()->id)->first();
        }
        return $student;
    }
}
