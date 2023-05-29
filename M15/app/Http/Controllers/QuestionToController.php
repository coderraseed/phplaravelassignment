<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionToController extends Controller
{
    function questionToAns(){
        return redirect('/dashboard');
    }
    function questionTo(){
        return 302;
    }
}
