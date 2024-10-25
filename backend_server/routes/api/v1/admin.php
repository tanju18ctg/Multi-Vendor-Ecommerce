<?php

use App\Http\Controllers\Api\Admin\AdminAuthController;
use App\Http\Controllers\Api\Admin\BrandController;
use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\DivisionController;
use App\Http\Controllers\Api\Admin\ProductController;
use App\Http\Controllers\Api\Admin\SliderController;
use Illuminate\Support\Facades\Route;



Route::controller(AdminAuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});

Route::middleware('auth:admin-api')->group(function () {

    Route::controller(AdminAuthController::class)->group(function () {
        Route::post('/logout', 'logout');
        Route::get('/me',  'user');
    });

    Route::apiResources([
        'sliders' => SliderController::class,
        'brands' => BrandController::class,
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'divisions' => DivisionController::class,
    ]);
});
