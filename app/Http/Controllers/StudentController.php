<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Student;
use App\User;

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

    public function updateProfile(Request $request)
    {
        Log::info('Updating student profile');
        Log::info($request);

        $user_id = Auth::User()->id;

        // // Personal Details
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $id_number = $request->input('id_number');
        $dob = $request->input('dob');
        $province = $request->input('province');
        $town = $request->input('town');
        $address = $request->input('address');
        $tagline = $request->input('tagline');

        // // Education
        $school = $request->input('school');
        $grade = $request->input('grade');

        if (gettype($request->input('subjects')) == 'array') {
            $subjects = implode(',', $request->input('subjects'));
        }
        else {
            $subjects = $request->input('subjects');
        }

        if ($request->input('varsity_exempt') == 'Yes')
        {
            $varsity_exempt = true;
        }
        else
        {
            $varsity_exempt = false;
        }

        if (gettype($request->input('preferred_study_locations')) == 'array') {
            $preferred_study_locations = implode(',', $request->input('preferred_study_locations'));
        }
        else {
            $preferred_study_locations = $request->input('preferred_study_locations');
        }

        // Additional Information
        $arts = $request->input('arts');
        $sports = $request->input('sports');
        $events = $request->input('events');
        $communication = $request->input('communication');
        $conceptualization = $request->input('conceptualization');
        $creativity = $request->input('creativity');
        $leadership = $request->input('leadership');

        if (gettype($request->input('career_interests')) == 'array') {
            $career_interests = implode(',', $request->input('career_interests'));
        }
        else {
            $career_interests = $request->input('career_interests');
        }

        $general_interests = $request->input('general_interests');

        $student = Student::where('user_id', $user_id)->update(array(
            'user_id' => $user_id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'contact' => $contact,
            'id_number' => $id_number,
            'dob' => $dob,
            'province' => $province,
            'town' => $town,
            'address' => $address,
            'tagline' => $tagline,

            'school' => $school,
            'grade' => $grade,
            'subjects' => $subjects,
            'varsity_exempt' => $varsity_exempt,
            'preferred_study_locations' => $preferred_study_locations,

            'arts' => $arts,
            'sports' => $sports,
            'events' => $events,
            'communication' => $communication,
            'conceptualization' => $conceptualization,
            'creativity' => $creativity,
            'leadership' => $leadership,
            'career_interests' => $career_interests,
            'general_interests' => $general_interests,
            'profile_updated' => true
        ));
        Log::info($student);
    }

    public function uploadProfilePic(Request $request)
    {
        $imageName = time().'.'.request()->img->getClientOriginalExtension();
        $current_user = Auth::user();
        $uploaddir = './images/student/';
        request()->img->move(public_path($uploaddir), $imageName);
        $image = User::where('id', '=', $current_user->id)->update([
            'avatar' => $imageName
        ]);
        $response = array('success' => true);
        return json_encode($imageName);
    }

    public function getCareerInterests()
    {
        $user = Auth::User();
        if($user->role === 'student') {
            $user_id = $user->id;
            $student = Student::select('career_interests')->where('user_id', '=', Auth::User()->id)->first();
        }
        Log::info($student["career_interests"]);
        return $student["career_interests"];
    }

    public function getProfilePic()
    {
        Log::info(Auth::User()->avatar);
        return '/images/student/' . strval(Auth::User()->avatar);
    }
}
