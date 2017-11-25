<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'contact',
        'school',
        'grade',
        'town',
        'sports',
        'arts'
    ];
}
