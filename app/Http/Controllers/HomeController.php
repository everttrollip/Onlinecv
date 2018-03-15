<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Enquiry;
use App\Student;
use App\Administrator;
use App\Hub;


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
        else if($user->role === 'administrator')
        {
            return view('administrator.dashboard');
        }
        else if($user->role === 'hub')
        {
            return view('hub.dashboard');
        }
    }

    //Return the user's own profile
    public function viewMyProfile(){
        $user = Auth::user();
        if($user->role === 'administrator'){
            $user_row = Administrator::where('user_id', '=', $user->id)->first();
            return view('administrator.profile')->with('user', $user_row);
        }else if($user->role === 'student'){
            $user_row = Student::where('user_id', '=', $user->id)->first();
            return view('student.profile')->with('user', $user_row);
        }else if($user->role === 'hub'){
            $user_row = Hub::where('user_id', '=', $user->id)->first();
            return view('hub.profile')->with('user', $user_row);
        }
    }

    //Return view with contact form
    public function contactUs(){
        return view('shared.contact-us');
    }

    //Send Contact Us to OnlineCV admin
    public function sendContactUs(Request $request){
        $user = Auth::user();
        $subject = $request->subject;
        $enquiry = $request->message;
        Mail::to('it@microhub.co.za')->send(new Enquiry($user, $enquiry, $subject));
        return array('success' => true);
    }

}
