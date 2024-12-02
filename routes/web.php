<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class,"ProductDisplay"]);
Route::get('/display', [ProductController::class,"display"]);
Route::get('/favorite', [ProductController::class,"ProductFavorite"]);




