<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App\Administrator;
use App\User;
use App\Student;
use DB;
use Carbon\Carbon;

class AchievementController extends Controller
{
    //Return all achievement categories
    public function getCategories(){
        $cats = DB::table('achievement_categories')->get();
        return $cats;
    }

     //Return administrator
     public function getAdmin(){
        $user = Auth::user();
        $admin = Administrator::where('user_id', '=', $user->id)->first();
        return $admin;
    }

    //Return student achievements by student id
    public function getStudentAchievementsByStudent($id){
        $achievements = DB::table('student_achievements')
        ->join('students', 'students.id', 'student_achievements.student_id')
        ->where('student_achievements.student_id', '=', $id)
        ->select('student_achievements.*', 'students.firstname', 'students.lastname')
        ->get();
        return $achievements;
    }

    //Update a students achievment during review
    public function updateAchievement(Request $request){
        $title = $request->title;
        $date = $request->date;
        $description = $request->description;
        $category = $request->category;
        $id = $request->id;
        try{
            $achievement = DB::table('student_achievements')
            ->where('id', '=', $id)
            ->update([
                'title' => $title,
                'date' => $date,
                'description' => $description,
                'category' => $category,
                'reviewed' => 1
            ]);
            return array('success' => true);
        }catch(QueryException $e){
            return array('success' => false, 'error' => $e);
        }
    }

    //Mark review request as completed
    public function submitReview($student_id){
        $now = Carbon::now('Africa/Johannesburg')->toDateTimeString();
        $admin = $this->getAdmin();
        $admin_id = $admin->id;
        try{
            DB::beginTransaction();

            //update all achievments as reviewed
            $achievments = DB::table('student_achievements')
            ->where('student_id', '=', $student_id)
            ->update([
                'reviewed' => 1
            ]);
            //mark request as completed
            $review_requests = DB::table('review_requests')
            ->where('review_requests.admin_id', '=', $admin_id)
            ->where('review_requests.student_id', '=', $student_id)
            ->update([
                'reviewed' => 1,
                'updated_at' => $now
            ]);

            DB::commit();
            return array('success' => true);
        }catch(QueryException $e){
            DB::rollBack();
            return array('success' => false, 'error' => $e);
        }
    }

//STUDENT ----------------------------->

    //Return view to edit student achievements
    public function EditMyAchievements(){
        $achievements = [];
        $user_id = Auth::User()->id;
        $student = Student::where('user_id', '=', $user_id)->first();
        if($student){
            $achievements = DB::table('student_achievements')->where('student_id', '=', $student->id)->get();
        }
        return view('student.achievements')->with('achievements', $achievements);
    }

    //Submit new achievement
    public function submitNewAchievement(Request $request){
        $now = Carbon::now();
        $now = $now ->toDateTimeString();
        $title = $request->title;
        $description = $request->description;
        $date = $request->date;
        $category = $request->category;
        $user_id = Auth::User()->id;
        try{
            DB::beginTransaction();
            $student = Student::where('user_id', '=', $user_id)->first();
            $achievement = DB::table('student_achievements')->insert([
                'student_id' => $student->id,
                'date' => $date,
                'title' => $title,
                'category' => $category,
                'description' => $description,
                'created_at' => $now,
                'reviewed' => 0
            ]);
            DB::commit();
            return array('success' => true);
        }catch(QueryException $e){
            DB::rollBack();
            return array('success' => false, 'error' => $e);
        }
    }

    //Update an achievement
    public function updateAchievementStudent(Request $request){
        $title = $request->title;
        $date = $request->date;
        $description = $request->description;
        $category = $request->category;
        $id = $request->id;
        try{
            $achievement = DB::table('student_achievements')
            ->where('id', '=', $id)
            ->update([
                'title' => $title,
                'date' => $date,
                'category' => $category,
                'description' => $description,
                'reviewed' => 0
            ]);
            return array('success' => true);
        }catch(QueryException $e){
            return array('success' => false, 'error' => $e);
        }
    }

    //Submit a new review request to administrator
    public function submitReviewRequest(){
        $now = Carbon::now();
        $now = $now ->toDateTimeString();
        $user_id = Auth::User()->id;
        try{
            DB::beginTransaction();

            $student = Student::where('user_id', '=', $user_id)->first();
            $student_id = $student->id;
            $admin_student = DB::table('admin_students')
                ->where('student_id', '=', $student_id)
                ->first();
            $admin_id = $admin_student->admin_id;

            //Remove credit
            $credit = DB::table('student_credits')
                ->where('student_id', '=', $student_id)
                ->update([
                    'updated_at' => $now
                ]);

                $credit = DB::table('student_credits')
                ->where('student_id', '=', $student_id)
                ->decrement('available');

            $exists = DB::table('review_requests')
                ->where('student_id', '=', $student_id)
                ->where('admin_id', '=', $admin_id)
                ->where('reviewed', '=', 0)
                ->first();

            if(!$exists){
                $review_request = DB::table('review_requests')->insert([
                    'student_id' => $student_id,
                    'admin_id' => $admin_id,
                    'reviewed' => 0,
                    'created_at' => $now
                ]);
            }
            DB::commit();
            return array('success' => true);
        }catch(QueryException $e){
            return array('success' => false, 'error' => $e);
        }

    }
}
