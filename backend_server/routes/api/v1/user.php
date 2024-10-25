<?php

use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\User\UserAuthController;
use Illuminate\Support\Facades\Route;


Route::controller(UserAuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});


Route::middleware('auth:user-api')->group(function () {

    Route::controller(UserAuthController::class)->group(function () {
        Route::post('/logout', 'logout');
        Route::get('/me',  'user');
    });
});
