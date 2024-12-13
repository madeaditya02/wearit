<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AfterPayController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\NewAddressController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\DetailProduct2Controller;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminDiscountController;
use App\Http\Controllers\FavoriteController;

// User
Route::get('/', [MainController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginAccount']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'submitAccount']);
Route::get('/profile', [AuthController::class, 'profile']);
Route::get('/history', [AuthController::class, 'history']);
Route::get('/accsetting', [AuthController::class, 'accSetting']);
Route::get('/product', [ProductController::class, "ProductDisplay"]);
Route::get('/display', [ProductController::class, "display"]);
Route::get('/favorites', [FavoriteController::class, "productFavorite"]);
Route::post('/favorites/add', [FavoriteController::class, "addProduct"]);
Route::post('/favorites/remove', [FavoriteController::class, "removeProduct"]);
Route::get('/product/{id_produk}', [ProductController::class, 'DetailProduct']);
Route::get('/cart', [CartController::class, "cart"]);
Route::post('/cart/updateQuantity', [CartController::class, "updateQuantity"]);
Route::post('/cart/delete', [CartController::class, "deleteItem"]);
Route::get('/cart/address', [CartController::class, "Address"]);
Route::get('/newaddress', [NewAddressController::class, "NewAddress"]);
Route::get('/cart/checkout', [CartController::class, "checkout"]);
Route::get('/cart/shipping', [CartController::class, "Shipping"]);
Route::get('/cart/payment', [CartController::class, "Payment"]);
Route::post('/cart/add', [CartController::class, "addProduct"]);

// Admin
Route::get('/admin', [AdminController::class, 'index']);
Route:: get('/admin/product',[AdminProductController::class,"ProductList"]);
Route::post('/admin/product/{id}/delete',[AdminProductController::class,"HapusProduct"]);
Route::get('/admin/order',[AdminOrderController::class,"OrderAdmin"]);
Route::get('/admin/customer', [AdminCustomerController::class, 'CustomerAll']);
Route::get('/admin/customer/detail', [AdminCustomerController::class, 'CustomerDetail']);
Route::get('/admin/discount', [AdminDiscountController::class, 'Diskon']);

Route::get('/api/cekongkir', [APIController::class, 'cekOngkir']);
Route::post('/api/midtrans-token', [APIController::class, 'midtransSnapToken']);
Route::post('/api/new-transaction', [APIController::class, 'newTransaction']);
