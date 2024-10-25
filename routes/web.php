<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('user',[UserController::class,'users']);
Route::get('students',[StudentController::class,'getStudents']);

Route::get('products',[ProductController::class,'getProduct']);

Route::get('users',[UserController::class,'queries']);
