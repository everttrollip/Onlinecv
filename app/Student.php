<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Student extends Model
{
    // /**
    //  * Let Eloquent know that when it fetches data from the database, it will
    //  * have to perform the following conversions.
    //  */
    // protected $casts = [
    //     'subjects' => 'array',
    //     'studyLocations' => 'array',
    //     'preferredStudyLocations' => 'array',
    //     'careerInterests' => 'array'
    // ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'email',
        'voucher',
        'subjects',
        'preferred_study_locations',
        'career_interests',
        'general_interests'
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

    public function getSubjectsAttribute($subjects)
    {
        // Replace all white spaces before and after commas
        $pattern = '/\s*,\s*/';
        $replace = ',';
        $removedWhitespaces = preg_replace($pattern, $replace, $subjects);
        return $removedWhitespaces;
    }

    public function getPreferredStudyLocationsAttribute($preferred_study_locations)
    {
        // Replace all white spaces before and after commas
        $pattern = '/\s*,\s*/';
        $replace = ',';
        $removedWhitespaces = preg_replace($pattern, $replace, $preferred_study_locations);
        return $removedWhitespaces;
    }

    public function getCareerInterestsAttribute($career_interests)
    {
        // Replace all white spaces before and after commas
        $pattern = '/\s*,\s*/';
        $replace = ',';
        $removedWhitespaces = preg_replace($pattern, $replace, $career_interests);
        return $removedWhitespaces;
    }
}
