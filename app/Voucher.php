<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    //
    protected $fillable = [
        'id',
        'admin_id',
        'voucher',
        'active'
    ];
}
