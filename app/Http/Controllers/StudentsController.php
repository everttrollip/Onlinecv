<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Students;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::User();
        if($user->role === 'student')
        {
            return view('student.dashboard');
        }
    }

    public function cv()
    {
        $user = Auth::user();
        if($user->role === 'student')
        {
            return view('student.cv', $user);
        }
    }

    public function updateprofile(Request $request)
    {
        $user_id = $firstname =  $lastname = $email = $interests = $contact = $school = $year = $dob = "";
        $interests = $sports = $arts = array();

        $user_id = Auth::User()->id;
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        //$email = $request->input('email'); to be handled in user table
        $contact = $request->input('contact');
        $school = $request->input('school');
        $grade = $request->input('grade');
        //$dob = $request->dob;
        $town = $request->input('town');
        $interests = $request->input('interests');
        $sports = $request->input('sports');
        $arts = $request->input('arts');
        $tagline = $request->input('tagline');

        $user = Students::where('user_id', '=', Auth::User()->id)->first();
        $user = Students::where('user_id', $user_id)->update(array('user_id' => Auth::User()->id,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'contact' => $contact,
        'grade' =>$grade,
        'sports'=> $sports,
        'arts' => $arts,
        'town' =>$town,
        'tagline' => $tagline
            ));
        $user = Students::where('user_id', '=', Auth::User()->id)->first();
        echo $user;

    }

    public function getStudent(){

        $user = Auth::User();
        if($user->role === 'student'){
            $user_id = $user->id;
            $user_response = Students::where('user_id', '=', Auth::User()->id)->first();
        }
        return $user_response;
    }

}

?>