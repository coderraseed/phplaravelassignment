<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionFourController extends Controller
{
    public function loginWithUserRoutes(){
        return "You are login from profile Route";
    }

    public function loginWithSettinghRoutes(){
        return "You are login from settings Route";
    }

    public function loginCorrectUser(){
        return response()->json('User name and Password wrong', 401);
    }
}
