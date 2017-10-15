<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
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

            $user = Student::where('user_id', '=', Auth::User()->id)->first();
            $user = Student::where('user_id', $user_id)->update(array('user_id' => Auth::User()->id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'contact' => $contact,
            'grade' =>$grade,
            'sports'=> $sports,
            'arts' => $arts,
            'town' =>$town,
            'tagline' => $tagline
                ));  
            $user = Student::where('user_id', '=', Auth::User()->id)->first();
            echo $user;
                
    }

    public function getStudent(){
        $user = Auth::User();
        if($user->role === 'student'){
                $user_id = $user->id;
                $user_response = Student::where('user_id', '=', Auth::User()->id)->first();
        }
        return $user_response;
    }
        
}

