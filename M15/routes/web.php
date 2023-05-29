<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\LogRequestMiddleware;
use App\Http\Controllers\QuestionToController;
use App\Http\Controllers\QuestionFourController;
use App\Http\Controllers\QuestionThreeController;





// Answer to the question no -1

Route::post('/register', [UserController::class, 'register']);



// Answer to the question no -2
Route::get('/home', [QuestionToController::class, 'questionToAns']);
Route::get('/dashboard', [QuestionToController::class, 'questionTo']);


// Answer to the question no -3
Route::get('/hello', [QuestionThreeController::class, 'LogRequest']);


// Answer to the question no -4

Route::middleware(['hello'])->group(function () {
    Route::get('/profile/{name}/{pass}', [QuestionFourController::class, 'loginWithUserRoutes']);
    Route::get('/settings/{name}/{pass}', [QuestionFourController::class, 'loginWithSettinghRoutes']);
});


// Answer to the question no -6

Route::post("/contact", ContactController::class);

// Answer to the question no -7

Route::post("/index", [PostController::class, 'index']);
Route::post("/create", [PostController::class, 'create']);
Route::post("/store", [PostController::class, 'store']);
Route::post("/show", [PostController::class, 'show']);
Route::post("/update", [PostController::class, 'update']);
Route::post("/destroy", [PostController::class, 'destroy']);


// Answer to the question no -8

Route::get('/', function () {
    return view('welcome');
});
