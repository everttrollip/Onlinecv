<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $fillable = [
        'id',
        'student_id',
        'hub_id',
        'viewed',
        'created_at',
        'updated_at'
    ];

    protected $table = 'contact_requests';
}
