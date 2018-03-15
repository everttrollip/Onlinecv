<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
    protected $fillable = [
        'user_id',
        'id',
        'firstname',
        'lastname',
        'email',
        'contact',
        'address',
        'town',
        'company',
    ];

    protected $table = 'hubs';
}
