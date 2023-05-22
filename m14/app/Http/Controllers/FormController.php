<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class FormController extends Controller{
    //Answer to the question no -1
    function FormSubmit(Request $request): string{

        $name = $request->input('name');
        return " My name is $name";

    }


    //Answer to the question no -2
    function UserAgent (Request $request): string {
        $userAgent = $request->header('UserAgentName');
        return "Who is the $userAgent";
    }

    //Answer to the question no -3
    function LvEndPoint(Request $request) {
        $page = $request->query('page', null);
        if ($page!==null) {
            return $page;
        } else {
            return;
        }
    }

    //Answer to the question no -4
    function JsonResponse(){
        $data = array( "message"=> "Success",
        "data"=>array(
            "name"=> "John Doe",
            "age"=> 25 )
        );

        return response()->json($data);
    }


     //Answer to the question no -5
    function FileUploads(Request $request){
        $file=$request->file('avatar');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        return true;
    }



    function SetCookie(Request $request){
        $rememberToken = $request->cookie('remember_token',null);
        return $rememberToken;
    }


    

}



