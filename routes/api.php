<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::prefix('register')->group(function () {
        Route::post('/user', [AuthController::class, 'userRegister']);
    });
    Route::post('forgot-password-token', [AuthController::class, 'generateResetToken']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('users', UserController::class);
        //Logout route
        Route::post('logout', [AuthController::class, 'logout']);
    });
});
