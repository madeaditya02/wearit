<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view("product.ProductDisplay"); 
});
=======
Route::get('/cart', [MainController::class, 'index']);
Route::get('/cart/checkout', [MainController::class, 'index']);
Route::get('/test', [MainController::class, 'index']);
Route::get('/test1', [MainController::class, 'index']);
Route::get('/products', [MainController::class, 'index']);
Route::get('/products/detail', [MainController::class, 'index']);
Route::get('/products/checkout', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'index']);
Route::get('/logout', [MainController::class, 'index']);
>>>>>>> 70f2119ee80c12b3ee48024f6c8546b11255d5fe
