<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('users', userController::class);