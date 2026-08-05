<?php

use App\Http\Controllers\WEB\Auth\Login;
use App\Http\Controllers\WEB\Auth\Logout;
use App\Http\Controllers\WEB\Auth\Registration;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::inertia('/', 'Home')->name('home');
});

Route::inertia('/login', 'Login')->name('login');
Route::post('/login', Login::class)
    ->middleware('guest');
Route::post('/logout', Logout::class)->middleware('auth');

Route::inertia('/register', 'Register')->name('register');
Route::post('/register', Registration::class)
    ->middleware('guest');
