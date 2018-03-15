<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Student;
use App\User;
use App\Administrator;
use DB;
use Storage;
use Response;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Mockery\CountValidator\Exception;
use App\CVSubmission;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Return all students
    public function show(){
        return Student::join('users', 'students.user_id', 'users.id')->get();
    }

    public function index()
    {
        $user = Auth::User();
        if($user->role === 'student') {
            $user_id = $user->id;
            $student = Student::where('user_id', '=', Auth::User()->id)->first();
        }else{
            $student = [];
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

    //Upload profile image
    public function uploadProfilePic(Request $request){
        $current_user = Auth::user();
        $avatars = $request->img;
        $imageName = time().'.'.request()->img->getClientOriginalExtension();
        if(!is_dir('./public/images/student/'))
        {
           mkdir( 'http://localhost:8000/public/images/student/');
        }
        $response = array('success' => true);
        $path = $avatars->storeAs('public/images/student/', $imageName);
        $update_user = User::where('id', '=', Auth::user()->id)
        ->update([
                'avatar' => $imageName
        ]);
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
        return '/storage/images/student/' . strval(Auth::User()->avatar);
    }

    //Return all achievements
    public function getStudentAchievements(){
        $achievements = [];
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        if($student){
            $achievements = DB::table('student_achievements')->where('student_id', '=', $student->id)->get();
        }
        return $achievements;
    }

    //Return reviewed achievements
    public function getReviewedAchievements(){
        $achievements = [];
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        if($student){
            $achievements = DB::table('student_achievements')
            ->where('student_id', '=', $student->id)
            ->where('reviewed', '=', 1)
            ->orderBy('date', 'DESC')
            ->get();
        }
        return $achievements;
    }

    //Return uploads page
    public function getMyUploads(){
        $user = Auth::user();
        $student = Student::where('user_id', '=' , $user->id)->first();
        $uploads = DB::table('student_uploads')->where('student_id', '=', $student->id)->get();
        return view('student.uploads')->with('uploads', $uploads);
    }

    //Upload a file
    public function uploadFile(Request $request){
        $user_id = Auth::User()->id;
        $file = $request->file;
        $student = Student::where('user_id', '=', $user_id)->first();
        $fileName = request()->file->getClientOriginalName();
        $fileSize = $request->file->getClientSize();
        if(!is_dir('./public/uploads/user/' . $user_id))
        {
           mkdir( 'http://localhost:8000/public/uploads/user/' . $user_id);
        }
        $response = array('success' => true);
        $path = $file->storeAs('public/uploads/user/' . $user_id,  $fileName);

            DB::table('student_uploads')->insert([
                'student_id' => $student->id,
                'file' => $fileName,
                'filesize' => $fileSize,
            ]);
            return response()->json([
                'message' => 'Upload success.',
                'path' => $path,
                'status' => 200
            ], 200);
        return json_encode($fileName);
    }

    //Delete a file
    public function removeFile(Request $request){
        $file = $request->file;

        $filename = $file['file'];
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        try{
             Storage::delete('public/uploads/user/'. $user_id . '/' . $filename);
             $filerow = DB::table('student_uploads')
                ->where('student_id', '=', $student->id)
                ->where('id', '=', $file['id'])
                ->delete();
            return (['success'=>true]);
        }catch(QueryException $e){
            return (['success'=>false, 'message' => $e]);
        }

    }

    //Retrieve all uploadedfiles
    public function getUploadFiles(){
        $user = Auth::user();
        $student = Student::where('user_id', '=' , $user->id)->first();
        $uploads = DB::table('student_uploads')->where('student_id', '=', $student->id)->get();
        return $uploads;
    }

    //Retrieve file
    public function getFile($filename){
        $user_id = Auth::User()->id;
        // $contents = asset('uploads/user/' . $user_id . '/' . $filename);
        // return response()->file($contents);
        $path = 'public/uploads/user/' . $user_id . '/' . $filename;
        $contents = Storage::get('public/uploads/user/' . $user_id . '/' . $filename);
        $file = Storage::get($path);
        $type = Storage::mimeType($path);
        return Response::make($contents, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
        // return response()->file($contents);
    }

    //Check if student has credit to edit achievements etc
    public function checkIfCreditIsAvailable(){
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        if($student){

            $credit = DB::table('student_credits')
            ->join('orders', 'orders.id', 'student_credits.order_id')
            ->where('student_credits.student_id', '=', $student->id)
            ->where('orders.payment_status', '=', 'Completed')
            ->where('student_credits.available', '=', 1)
            ->first();

            if($credit){
                return array('credit' => true);
            }
        }
        return array('credit' => false);
    }

    //Return credits view with credits
    public function getStudentCredits(){
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        $credits = DB::table('student_credits')
            ->where('student_id', '=', $student->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        $unpaid = DB::table('student_credits')
            ->join('orders', 'student_credits.order_id', 'orders.id')
            ->where('orders.payment_status', '=', 'Pending')
            ->get();

        return view('student.credits')->with('credits', $credits)->with('unpaid', $unpaid);
    }

    //Get and return view for viewing my administrator
    public function myAdministrator(){
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        $admin = DB::table('admin_students')
            ->where('student_id', '=', $student->id)
            ->first();
        $admin_profile = Administrator::where('id', '=', $admin->admin_id)->first();
        return view('student.view-administrator-profile')->with('administrator', $admin_profile);
    }

    //Get achievements that are reviewed for cv view
    public function getReviewedAchievementsByStudentId($student_id){
        $achievements = [];
            $achievements = DB::table('student_achievements')
            ->where('student_id', '=', $student_id)
            ->where('reviewed', '=', 1)
            ->orderBy('date', 'DESC')
            ->get();

        return $achievements;
    }

    //Submit CV
    public function submitCv(){
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        $student_id = $student->id;
        $admin = DB::table('admin_students')
        ->where('student_id', '=', $student->id)
        ->first();

        try{
            DB::beginTransaction();
            $row = Student::where('id', '=', $student_id)
                ->update([
                    'cv_submitted' => 1
                ]);
            $exists = CVSubmission::where('student_id', '=', $student_id)
                ->where('admin_id', '=', $admin->admin_id)
                ->where('viewed', '=', 0)
                ->first();
            if(!$exists){
                $submission = CVSubmission::create([
                    'student_id' => $student_id,
                    'admin_id' => $admin->admin_id
                ]);
            }
            DB::commit();
            return (['success' => true]);
        }catch(QueryException $e){
            DB::rollBack();
            return (['success' => true, 'error' => $e]);
        }
    }

    //Return CV submission status
    public function getMyCVSubmissionStatus(){
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        $student_id = $student->id;
        $status = CVSubmission::where('student_id', '=', $student_id)
        ->first();
        if($status){
            return (['actioned' => $status->viewed]);
        }else{
            return (['actioned' => '', 'error' => 'Does not exists']);
        }
    }


}
