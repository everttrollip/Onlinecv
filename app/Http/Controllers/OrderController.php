<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Mail;
use App\Mail\VoucherEFTPayment;
use App\User;
use App\Order;
use App\Voucher;
use App\Administrator;
use DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    //Return administrator id
    public function getAdmin(){
        $user = Auth::user();
        $admin = Administrator::where('user_id', '=', $user->id)->first();
        return $admin;
    }

     //Admin buy vouchers
     public function buyVouchers(Request $request){
        $user = Auth::user();
        $total_vouchers = $request->total_vouchers;
        $total_amount = $request->total_amount;
        $admin = $this->getAdmin();

        $order = Order::create([
            'total_amount' => $total_amount,
            'user_id' => Auth::user()->id,
            'payment_status' => 'Pending'
        ]);
        $success = false;
        if($order){
            $now = Carbon::now();
            $now = $now ->toDateTimeString();
            for($i = 0; $i < $total_vouchers; $i++){
                $success = false;
                while(!$success){
                    $voucher = $this->generateRandomString(10);
                    $voucher_code = $admin->id . '#' . $voucher;
                    $exists = Voucher::where('voucher','=', $voucher_code)->first();
                    if(!$exists){
                        $insert_voucher = Voucher::insert([
                            'admin_id' => $admin->id,
                            'voucher' => $voucher_code,
                            'order_id' => $order->id,
                            'active' => '0',
                            'created_at' => $now,
                            'updated_at' => $now
                        ]);
                    if($insert_voucher){
                        $success = true;
                    }else{
                        $success = false;
                    }
                    }else{
                        $success = false;
                    }
                }
            }
            Mail::to($user)->send(new VoucherEFTPayment($user, $order));
            return array('success' => true, 'order' => $order);
        }else{
            return array('success' => false);
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
}
