<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\CreditEftPayment;
use DB;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use App\Student;
use App\Order;
use App\User;

class CreditController extends Controller
{
    //Return price for credit
    public function getPrice($type){
        $creditPrice = DB::table('credit_prices')
        ->where('type', '=', $type)
        ->get();
        return $creditPrice;
    }

    //Purchase Credit Student
    public function purchaseCreditsStudent(Request $request){
        $user = Auth::user();
        $student = Student::where('user_id', '=', $user->id)->first();
        $student_id = $student->id;
        $totalCredits = $request->totalCredits;
        $total_amount = $request->total_amount;
        $now = Carbon::now();
        $now = $now ->toDateTimeString();
        try{
            DB::beginTransaction();

            $order = Order::create([
                'total_amount' => $total_amount,
                'user_id' => Auth::user()->id,
                'payment_status' => 'Pending',
                'description' => 'Credit Purchase',
                'created_at' => $now
            ]);

            for($i = 0; $i < $totalCredits; $i++){
                $exists = true;
                while($exists){
                    $credit = $this->generateRandomString(10);
                    $credit_code = $student->id . '#' . $credit;
                    $exists = DB::table('student_credits')->where('credit_token','=', $credit_code)->first();
                }
                if(!$exists){
                    DB::table('student_credits')
                    ->insert([
                        'credit_token' => $credit_code,
                        'created_at' => $now,
                        'student_id' => $student_id,
                        'available' => 1,
                        'order_id' => $order->id
                    ]);
                }
            }
            DB::commit();
            Mail::to($user)->send(new CreditEFTPayment($user, $order));
            return array('success' => true);
        }catch(QueryException $e){
            DB::rollBack();
            return array('success' => false, 'error' => $e);
        }

    }

    //Generate random voucher strings
    public  function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    //Get all student credits p student
    public function getMyStudentCredits(){
        $user = Auth::user();
        $student = Student::where('user_id', '=', $user->id)->first();
        $student_id = $student->id;
        $credits = DB::table('student_credits')
            ->where('student_id', '=', $student_id)
            ->orderBy('created_at', 'DESC')
            ->get();

            $unpaid = DB::table('student_credits')
            ->join('orders', 'student_credits.order_id', 'orders.id')
            ->where('orders.payment_status', '=', 'Pending')
            ->get();


        return array('credits' => $credits, 'unpaid' => $unpaid);

    }
}
