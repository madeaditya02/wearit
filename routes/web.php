<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/test', [MainController::class, 'index']);
Route::get('/test1', [MainController::class, 'index']);
Route::get('/products', [MainController::class, 'index']);
Route::get('/products/detail', [MainController::class, 'index']);
Route::get('/products/checkout', [MainController::class, 'index']);
