<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Login')->name('login');
Route::inertia('/', 'Registration')->name('registration');
