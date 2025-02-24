<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

  

    Route::middleware('role:admin')->group(function () {
        Route::post('/posts', [PostController::class, 'store']);
    });
    
    Route::middleware('role:admin')->group(function () {
        Route::put('/posts/{id}', [PostController::class, 'update']);
    });
    
    Route::middleware('role:employee|manager|admin')->group(function () {
        Route::get('/posts', [PostController::class, 'index']);
    });
});