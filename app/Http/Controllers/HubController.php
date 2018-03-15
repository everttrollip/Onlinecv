<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use App\User;
use App\Hub;
use App\Student;
use Illuminate\Database\QueryException;

class HubController extends Controller
{
    //Upload profile image
    public function uploadProfilePic(Request $request){
        $current_user = Auth::user();
        $avatars = $request->img;
        $imageName = time().'.'.request()->img->getClientOriginalExtension();
        if(!is_dir('./public/images/hub/'))
        {
           mkdir( 'http://asseco.xyz/public/images/hub/');
        }
        $response = array('success' => true);
        $path = $avatars->storeAs('public/images/hub/', $imageName);
        $update_user = User::where('id', '=', Auth::user()->id)
        ->update([
                'avatar' => $imageName
        ]);
        return json_encode($imageName);
    }

    //Return avatar
    public function getAvatar($id){
        $admin = Hub::where('id', '=', $id)->first();
        $user = User::where('id', '=', $admin->user_id)->first();
        return $user->avatar;
    }

    //Save changes made to hub
    public function updateHub(Request $request){
        $data = $request->data;
        try{
            $hub = Hub::where('user_id', '=', Auth::user()->id)
                ->update([
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'email' =>$data['email'],
                    'contact' => $data['contact'],
                    'address' =>$data['address'],
                    'company' =>$data['company'],
                    'town' => $data['town'],
                    'province' => $data['province'],
                    'company_description' => $data['company_description'],
                ]);
                return (['success'=>true]);
        }catch(QueryException $e){
            return (['success'=>false, 'error' => $e]);
        }
    }

    //Return view with all students
    public function getViewStudents(){
        $students = Student::join('users', 'users.id', 'students.user_id')
        ->orderBy('students.firstname', 'ASC')
        ->select('students.*', 'users.*', 'students.id as student_id')
        ->get();
        return view('hub.view-students')->with('students', $students);
    }

}
