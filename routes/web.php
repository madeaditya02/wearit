<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\DetailProductController;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/detailproduct', [DetailProductController::class, 'DetailProduct']);
=======

Route::get('/', [MainController::class, 'index']);
>>>>>>> 5128264ef8a07be763f1ababbc90675e219bf864
