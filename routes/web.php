<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/cart', [MainController::class, 'index']);
Route::get('/cart/checkout', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'index']);
Route::get('/logout', [MainController::class, 'index']);
Route::get('/register', [MainController::class, 'index']);
Route::get('/admin', [MainController::class, 'index']);
