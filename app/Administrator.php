<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'user_id',
        'id',
        'firstname',
        'lastname',
        'email',
        'contact',
        'id_number',
        'address',
        'town'
    ];

}

