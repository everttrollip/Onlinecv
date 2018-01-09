<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Administrator;
use App\User;
use DB;

class AdministratorController extends Controller
{
    //Return administrator
    public function getAdmin(){
        $user = Auth::user();
        $admin = Administrator::where('user_id', '=', $user->id)->first();
        return $admin;
    }

    //update details
    public function updateAdministrator(Request $request){
        $data = $request->data;

        $admin = Administrator::where('user_id', '=', Auth::user()->id)->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' =>$data['email'],
            'contact' => $data['contact'],
            'address' =>$data['address'],
            'dob' =>$data['dob'],
            'town' => $data['town'],
            'province' => $data['province']
        ]);
    }

    //upload profile image
    public function uploadProfilePic(Request $request){
        $imageName = time().'.'.request()->img->getClientOriginalExtension();
        $current_user = Auth::user();
        $uploaddir = './images/administrator/';
        request()->img->move(public_path($uploaddir), $imageName);
        $image = User::where('id', '=', $current_user->id)->update([
            'avatar' => $imageName
        ]);
        $response = array('success' => true);
        return json_encode($imageName);
    }

    //View all students from admin
    public function viewMyStudents(){
        $admin = $this->getAdmin();
        $admin_id = $admin->id;
        $students = DB::table('admin_students')
        ->join('students', 'students.id', '=', 'admin_students.student_id')
        ->where('admin_id', '=' , $admin_id)->get();
        return view('administrator.students')->with('students', $students);
    }

    //Return all the review requests for current administrato
    public function getReviewRequests(){
        $admin = $this->getAdmin();
        $admin_id = $admin->id;
        $review_requests = DB::table('review_requests')->where('admin_id', '=', $admin_id)->get();
        return $review_requests;
    }
}
