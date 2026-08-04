<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [UserController::class, 'register'])->middleware('guest:sanctum');
Route::post('/logout', function (Request $request) {
    return $request->user()->currentAccessToken()->delete();
})->middleware('auth:sanctum')->name('logout');
Route::post('/login', [UserController::class, 'login'])->middleware('guest:sanctum');
