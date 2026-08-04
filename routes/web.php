<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::inertia('/login', 'Login')->middleware('guest')->name('login');
Route::post('login', [UserController::class, 'login'])->middleware('guest');

Route::inertia('/register', 'Register')->name('registration');
Route::post('register', [UserController::class, 'register'])->middleware('guest');

Route::post('logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');
