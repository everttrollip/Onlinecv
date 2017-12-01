<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Voucher;
use App\Administrator;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    //View Vouchers
    public function viewVouchers(){
        $user = Auth::user();
        if($user->role === 'administrator'){
            $admin = User::where('id', '=', $user->id)->first();
            $vouchers = Voucher::where('admin_id','=',$admin->id)->get();
            return view('administrator.view-vouchers')->with('vouchers', $vouchers);
        }
    }
}
