<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Student;
use DB;
use App\Administrator;
use App\User;
use Illuminate\Database\QueryException;

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

    //Get student's cv by student id and return view
    public function getByStudentId($id){
        $student = Student::join('users', 'users.id', 'students.user_id')
        ->where('students.id', '=', $id)
        ->select('users.*', 'students.id as student_id', 'students.*')
        ->first();
        $user = Auth::user();
        return view('shared.view-cv')->with('student', $student)->with('user', $user);
    }

    //Check if student needs activation
    public function checkIfCVNeedActivation($student_id){
        $user = Auth::user();
        $admin = Administrator::where('user_id', '=', $user->id)->first();
        $activation = DB::table('cv_submissions')
        ->where('student_id', '=', $student_id)
        ->where('viewed', '=', '0')
        ->where('admin_id', '=', $admin->id)
        ->first();
        return (['activation' => $activation]);
    }

    //Mark CV as active
    public function markCVActivated($student_id){
        $user = Auth::user();
        try{
                $admin = Administrator::where('user_id', '=', $user->id)->first();
                $activation = DB::table('cv_submissions')
                ->where('student_id', '=', $student_id)
                ->where('admin_id', '=', $admin->id)
                ->update([
                'viewed' => 1
            ]);
            $student = Student::where('id', '=', $student_id)->update([
                'active' => 1
            ]);
            return (['success' => true]);
        }catch(QueryException $e){
            return (['success' => false]);
        }
    }
}
