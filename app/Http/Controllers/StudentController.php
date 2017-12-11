<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        $idNumber = $request->input('idNumber');
        $dob = $request->input('dob');
        $province = $request->input('province');
        $town = $request->input('town');
        $address = $request->input('address');
        $tagline = $request->input('tagline');

        // // Education
        $school = $request->input('school');
        $grade = $request->input('grade');
        $subjects = implode(',', $request->input('subjects'));
        if ($request->input('varsityExempt') == 'Yes')
        {
            $varsityExempt = true;
        }
        else
        {
            $varsityExempt = false;
        }
        $preferredStudyLocations = implode(',', $request->input('preferredStudyLocations'));

        // Additional Information
        $arts = $request->input('arts');
        $sports = $request->input('sports');
        $events = $request->input('events');
        $communication = $request->input('communication');
        $conceptualization = $request->input('conceptualization');
        $creativity = $request->input('creativity');
        $leadership = $request->input('leadership');
        $careerInterests = implode(',', $request->input('careerInterests'));
        $generalInterests = $request->input('generalInterests');

        $student = Student::where('user_id', $user_id)->update(array(
            'user_id' => $user_id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'contact' => $contact,
            'id_number' => $idNumber,
            'dob' => $dob,
            'province' => $province,
            'town' => $town,
            'address' => $address,
            'tagline' => $tagline,

            'school' => $school,
            'grade' => $grade,
            'subjects' => $subjects,
            'varsity_exempt' => $varsityExempt,
            'preferred_study_locations' => $preferredStudyLocations,

            'arts' => $arts,
            'sports' => $sports,
            'events' => $events,
            'communication' => $communication,
            'conceptualization' => $conceptualization,
            'creativity' => $creativity,
            'leadership' => $leadership,
            'career_interests' => $careerInterests,
            'general_interests' => $generalInterests
        ));
        Log::info($student);
    }
}
