<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailProductController;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/detailproduct', [DetailProductController::class, 'DetailProduct']);