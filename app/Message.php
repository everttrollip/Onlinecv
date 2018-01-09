<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'id', 'sender_id', 'receiver_id', 'message', 'sender', 'receiver'
    ];
}
