<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactRequest;
use Illuminate\Database\QueryException;
use App\Hub;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use App\User;

class RequestController extends Controller
{
    public function getHubId(){
        $hub = Hub::where('user_id', '=', Auth::user()->id)->first();
        return $hub->id;
    }

    public function sendContactRequest($student_id){
        $hub_id = $this->getHubId();
        try{
            DB::beginTransaction();
            $exists = ContactRequest::where('student_id' , '=', $student_id)->where('hub_id', '=', $hub_id)->first();
            if(!$exists){
                $row = ContactRequest::create([
                    'student_id' => $student_id,
                    'hub_id' => $hub_id
                ]);
            }
            DB::commit();
            return (['success'=>true]);
        }catch(QueryException $e){
            DB::rollBack();
            return (['success'=>false]);
        }
    }
}
