<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\NewAddressController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AfterPayController;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/cart', [ProductController::class,"ProductDisplay"]);
Route::get('/address', [AddressController::class,"Address"]);
Route::get('/newaddress', [NewAddressController::class,"NewAddress"]);
Route::get('/shipping', [ShippingController::class,"Shipping"]);
Route::get('/payment', [PaymentController::class,"Payment"]);
Route::get('/afterpay', [AfterPayController::class,"AfterPay"]);