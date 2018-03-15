<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Administrator;
use App\User;
use DB;
use Illuminate\Database\QueryException;

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
            'province' => $data['province'],
            'bio' => $data['bio'],
            'job_title' => $data['job_title']
        ]);
    }

    //Upload profile image
    public function uploadProfilePic(Request $request){
        $current_user = Auth::user();
        $avatars = $request->img;
        $imageName = time().'.'.request()->img->getClientOriginalExtension();
        if(!is_dir('./public/images/administrator/'))
        {
           mkdir( 'http://asseco.xyz/public/images/administrator/');
        }
        $response = array('success' => true);
        $path = $avatars->storeAs('public/images/administrator/', $imageName);
        $update_user = User::where('id', '=', Auth::user()->id)
        ->update([
                'avatar' => $imageName
        ]);
        return json_encode($imageName);
    }


    //View all students from admin
    public function viewMyStudents(){
        $admin = $this->getAdmin();
        $admin_id = $admin->id;
        $students = DB::table('admin_students')
        ->join('students', 'students.id', '=', 'admin_students.student_id')
        ->join('users', 'users.id', 'students.user_id')
        ->where('admin_id', '=' , $admin_id)->get();
        return view('administrator.students')->with('students', $students);
    }

    //Return all the review requests for current administrato
    public function getReviewRequests(){
        $admin = $this->getAdmin();
        $admin_id = $admin->id;
        $review_requests = DB::table('review_requests')
            ->where('admin_id', '=', $admin_id)
            ->where('reviewed', '=', 0)
            ->get();
        return $review_requests;
    }

    //Return admin tasks for header
    public function getTasks(){
        $admin = $this->getAdmin();
        $admin_id = $admin->id;
        $review_requests = DB::table('review_requests')
            ->join('students', 'students.id', 'review_requests.student_id')
            ->where('review_requests.admin_id', '=', $admin_id)
            ->where('review_requests.reviewed', '=', 0)
            ->select('review_requests.*', 'students.firstname', 'students.lastname')
            ->get();
        return $review_requests;
    }

    //Get and return view to review the requested review by id
    public function reviewRequestById($id){
        $achievements = DB::table('student_achievements')
        ->join('students', 'students.id', 'student_achievements.student_id')
        ->where('student_achievements.student_id', '=', $id)
        ->select('student_achievements.*', 'students.firstname', 'students.lastname')
        ->get();
        return view('administrator.review-achievements')->with('student_achievements', $achievements);
    }

    //Return avatar
    public function getAvatarById($id){
        $admin = Administrator::where('id', '=', $id)->first();
        $user = User::where('id', '=', $admin->user_id)->first();
        return $user->avatar;
    }

    //Return student count
    public function getStudentCountById($id){
        $count = DB::table('admin_students')
            ->where('admin_id', '=', $id)
            ->count();
        return $count;
    }

    //Return all admin studets
    public function getMyStudents(){
        $user = Auth::user();
        $admin = Administrator::where('user_id', '=', $user->id)->first();
        $students = DB::table('admin_students')
            ->join('students', 'students.id', 'admin_students.student_id')
            ->join('users', 'users.id', 'students.user_id')
            ->where('admin_students.admin_id', '=', $admin->id)
            ->orderBy('users.created_at', 'DESC')
            ->limit(4)
            ->get();
        return $students;
    }

    //Return all CV's waiting for submission approval from the admin logged in
    public function getCVsubissionReviews(){
        $user = Auth::user();
        $admin = Administrator::where('user_id', '=', $user->id)->first();
        $subs = DB::table('cv_submissions')
        ->join('students', 'students.id', 'cv_submissions.student_id')
        ->where('cv_submissions.admin_id', '=', $admin->id)
        ->where('cv_submissions.viewed', '=', 0)
        ->select('cv_submissions.*', 'students.firstname', 'students.lastname')
        ->get();
        return $subs;
    }


}
