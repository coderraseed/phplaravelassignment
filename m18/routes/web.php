<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/posts', [PostController::class, 'index']);
Route::delete('/posts/{id}/delete', [PostController::class, 'delete']);
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts']);


