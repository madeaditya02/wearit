<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\DetailProduct2Controller; 

Route::get('/', function (){
    return view('welcome');
});

Route::get('/detailproduct', [DetailProductController::class, 'DetailProduct']);

Route::get('/detailproduct2', [DetailProduct2Controller::class, 'DetailProduct2']);