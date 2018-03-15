<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //Return View to Upload Reference Letters
    public function uploadReferenceLettersView(){
        return view('student.reference-letters');
    }

}
