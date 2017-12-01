<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'id', 'total_amount', 'user_id', 'payment_status'
    ];
}
