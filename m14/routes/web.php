<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Answer to the question no -1
Route::post('/submit', [FormController::class,"FormSubmit"]);

//Answer to the question no -2
Route::post('/AgentData', [FormController::class,"UserAgent"]);

//Answer to the question no -3
Route::get('/page',[FormController::class,'LvEndPoint']);

//Answer to the question no -4
Route::get('/response',[FormController::class,'JsonResponse']);

//Answer to the question no -5
Route::post('/uploadFile',[FormController::class,'FileUploads']);

//Answer to the question no -6
Route::post('/setcookie',[FormController::class,'SetCookie']);

//Answer to the question no -7
Route::post('/submit',function(Request $request){
        $email = $request->input('email');
        if($email){ return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "Email must not be empty!";
    }
});
