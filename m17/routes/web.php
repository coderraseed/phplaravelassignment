<?php

use App\Http\Controllers\PostsController;
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
    return 'welcome';
});

//Route::get('/first', [demoController::class, 'demoActionFirst']);


Route::get('/postsretrives',[ PostsController::class, 'postsRetrives']);

Route::get('/postdistinct',[ PostsController::class, 'postDistinct']);

Route::get('/firstrecord',[ PostsController::class, 'firstRecord']);

Route::get('/postdescription',[ PostsController::class, 'postDescription']);

Route::get('/posttitle',[ PostsController::class, 'postTitle']);

Route::get('/postinsert',[ PostsController::class, 'postInsert']);

Route::get('/updaterows',[ PostsController::class, 'updateRows']);

Route::get('/deleterows',[ PostsController::class, 'deleteRows']);

//!Aggregates
Route::get('/count', [PostsController::class, 'aggreGatesCount']);
Route::get('/max', [PostsController::class, 'aggreGatesMax']);
Route::get('/min', [PostsController::class, 'aggreGatesMin']);
Route::get('/avg', [PostsController::class, 'aggreGatesAvg']);
Route::get('/sum', [PostsController::class, 'aggreGatesSum']);

Route::get('/postwherenot',[ PostsController::class, 'postWhereNot']);

Route::get('/postexists',[ PostsController::class, 'postExists']);
Route::get('/postDoesntExist',[ PostsController::class, 'postDoesntExist']);

Route::get('/postmin',[ PostsController::class, 'postmin_to_read']);
Route::get('/postmintoread',[ PostsController::class, 'postmintoRead']);


