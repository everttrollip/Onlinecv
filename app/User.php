<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'role',
        'activated',
        'activation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function isAdministrator()
    {
        if ($this->role == 'administrator') {
            return true;
        }
        else {
            return false;
        }
    }

    public function isStudent()
    {
        if ($this->role == 'student') {
            return true;
        }
        else {
            return false;
        }
    }
}
