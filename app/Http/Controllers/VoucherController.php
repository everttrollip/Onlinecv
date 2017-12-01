<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VoucherMail;
use App\User;
use App\Student;
use App\Voucher;
use DB;
use App\Administrator;


class VoucherController extends Controller
{
    //Return administrator id
    public function getAdmin(){
        $user = Auth::user();
        $admin = Administrator::where('user_id', '=', $user->id)->first();
        return $admin;
    }

    //View Vouchers
    public function viewVouchers(){
        $user = Auth::user();
        if($user->role === 'administrator'){
            $admin = Administrator::where('user_id', '=', $user->id)->first();
            $vouchers = Voucher::join('orders', 'orders.id', 'vouchers.order_id')
            ->where('admin_id','=',$admin->id)
            ->select('vouchers.*', 'orders.payment_status')
            ->get();
            return view('administrator.view-vouchers')->with('vouchers', $vouchers);
        }
    }

    //Return buy proce for admin - get price for admin
    public function getPriceForAdmin(){
        $user = Auth::user();
        if($user->role === 'administrator'){
            $admin = User::where('id', '=', $user->id)->first();
            $voucher_price = DB::table('voucher_prices')->where('admin_id','=',$admin->id)->get();
            return $voucher_price;
        }
    }

    //email voucher
    public function emailVoucher(Request $request){
        $email = $request->email;
        $voucher = $request->voucher;
        Mail::to($email)->send(new VoucherMail($voucher));
        return array('success' => true);
    }
}
