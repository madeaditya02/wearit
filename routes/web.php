<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AfterPayController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\NewAddressController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\DetailProduct2Controller;

Route::get('/', [MainController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'submitAccount']);
Route::get('/profile', [AuthController::class, 'profile']);
Route::get('/history', [AuthController::class, 'history']);
Route::get('/product', [ProductController::class, "ProductDisplay"]);
Route::get('/display', [ProductController::class, "display"]);
Route::get('/favorite', [ProductController::class, "ProductFavorite"]);
Route::get('/product/detail', [ProductController::class, 'DetailProduct']);
Route::get('/detailproduct2', [DetailProduct2Controller::class, 'DetailProduct2']);
Route::get('/cart', [ProductController::class, "cartDisplay"]);
Route::get('/cart/address', [CartController::class, "Address"]);
Route::get('/newaddress', [NewAddressController::class, "NewAddress"]);
Route::get('/cart/shipping', [CartController::class, "Shipping"]);
Route::get('/cart/payment', [CartController::class, "Payment"]);
Route::get('/afterpay', [AfterPayController::class, "AfterPay"]);
