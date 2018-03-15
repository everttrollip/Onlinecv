<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CVSubmission extends Model
{
    protected $fillable = [
        'id',
        'student_id',
        'admin_id',
        'viewed',
        'created_at',
        'updated_at'
    ];

    protected $table = 'cv_submissions';
}
