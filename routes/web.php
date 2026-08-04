<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function() {
    Route::inertia('/', 'Home')->name('home');
});
Route::inertia('/login', 'Login')->middleware('guest')->name('login');
Route::inertia('/register', 'Register')->middleware('guest')->name('register');
