<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/login', 'Login')->middleware('guest')->name('login');
Route::inertia('/register', 'Register')->middleware('guest')->name('register');
