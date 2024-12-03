<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\DetailProduct2Controller; 

Route::get('/', [MainController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'submitAccount']);
Route::get('/profile', [AuthController::class, 'profile']);
Route::get('/history',[AuthController::class, 'history']);
Route::get('/product', [ProductController::class,"ProductDisplay"]);
Route::get('/display', [ProductController::class,"display"]);
Route::get('/favorite', [ProductController::class,"ProductFavorite"]);
Route::get('/detailproduct', [DetailProductController::class, 'DetailProduct']);
Route::get('/detailproduct2', [DetailProduct2Controller::class, 'DetailProduct2']);
