<?php

use App\Http\Controllers\WEB\Auth\Registration;
use App\Http\Controllers\WEB\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::inertia('/', 'Home')->name('home');
});

Route::inertia('/login', 'Login')->name('login');
Route::post('/login', Login::class)
    ->middleware('guest');

Route::inertia('/register', 'Register')->name('register');
Route::post('/register', Registration::class)
    ->middleware('guest');
