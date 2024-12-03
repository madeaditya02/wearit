<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

Route::get('/', [MainController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'submitAccount']);
Route::get('/profile', [AuthController::class, 'profile']);
Route::get('/history',[AuthController::class, 'history']);
Route::get('/product', [ProductController::class,"ProductDisplay"]);
Route::get('/display', [ProductController::class,"display"]);
Route::get('/favorite', [ProductController::class,"ProductFavorite"]);
