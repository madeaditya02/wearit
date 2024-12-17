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
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\NewAddressController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\DetailProduct2Controller;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminDiscountController;
use App\Http\Controllers\FavoriteController;

// User
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'loginAccount'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'submitAccount'])->middleware('guest');
Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth');
Route::post('/profile', [AuthController::class, 'updateProfile'])->middleware('auth');
Route::get('/profile/address', [AuthController::class, 'address'])->middleware('auth');
Route::get('/profile/address/new', [AuthController::class, 'newAddress'])->middleware('auth');
Route::post('/profile/address/new', [AuthController::class, 'storeAddress'])->middleware('auth');
Route::get('/profile/address/{id_alamat}/edit', [AuthController::class, 'editAddress'])->middleware('auth');
Route::post('/profile/address/{id_alamat}/edit', [AuthController::class, 'updateAddress'])->middleware('auth');
Route::delete('/profile/address/{id_alamat}', [AuthController::class, 'deleteAddress'])->middleware('auth');
Route::get('/history', [AuthController::class, 'history'])->middleware('auth');
Route::get('/accsetting', [AuthController::class, 'accSetting'])->middleware('auth');
Route::post('/accsetting/edit-password', [AuthController::class, 'editPassword'])->middleware('auth');
Route::get('/product', [ProductController::class, "ProductDisplay"]);
Route::get('/display', [ProductController::class, "display"]);
Route::get('/favorites', [FavoriteController::class, "productFavorite"])->middleware('auth');
Route::post('/favorites/add', [FavoriteController::class, "addProduct"])->middleware('auth');
Route::post('/favorites/remove', [FavoriteController::class, "removeProduct"])->middleware('auth');
Route::get('/product/{id_produk}', [ProductController::class, 'DetailProduct']);
Route::get('/cart', [CartController::class, "cart"]);
Route::post('/cart/updateQuantity', [CartController::class, "updateQuantity"])->middleware('auth');
Route::post('/cart/delete', [CartController::class, "deleteItem"])->middleware('auth');
Route::get('/cart/address', [CartController::class, "Address"])->middleware('auth');
Route::get('/newaddress', [NewAddressController::class, "NewAddress"]);
Route::get('/cart/checkout', [CartController::class, "checkout"])->middleware('auth');
Route::get('/cart/shipping', [CartController::class, "Shipping"])->middleware('auth');
Route::get('/cart/payment', [CartController::class, "Payment"])->middleware('auth');
Route::post('/cart/add', [CartController::class, "addProduct"])->middleware('auth');

// Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::resource('/admin/product', AdminProductController::class)->except(['show']);
// Route::post('/admin/product/{id}/delete', [AdminProductController::class, "HapusProduct"]);
Route::get('/admin/order', [AdminOrderController::class, "OrderAdmin"]);
Route::post('/admin/order/status', [AdminOrderController::class, "updateStatus"]);
Route::get('/admin/customer', [AdminCustomerController::class, 'CustomerAll']);
Route::get('/admin/customer/detail', [AdminCustomerController::class, 'CustomerDetail']);
Route::get('/admin/discount', [AdminDiscountController::class, 'Diskon']);
Route::get('/admin/addproduct', [AdminProductController::class, "addProduct"]);
Route::post('/admin/addproduct', [AdminProductController::class, "addProductSubmit"]);
Route::get('/admin/customer/{user:id_user}', [AdminCustomerController::class, 'CustomerDetail']);
Route::get('/admin/customer/{user:id_user}/edit', [AdminCustomerController::class, 'editCustomer']);
Route::post('/admin/customer/{user:id_user}/edit', [AdminCustomerController::class, 'updateCustomer']);
Route::post('/admin/customer/delete', [AdminCustomerController::class, 'deleteCustomer']);
// Route::get('/admin/discount', [AdminDiscountController::class, 'Diskon']);
Route::resource('/admin/discount', AdminDiscountController::class)->except(['show']);

Route::get('/api/cekongkir', [APIController::class, 'cekOngkir']);
Route::post('/api/midtrans-token', [APIController::class, 'midtransSnapToken']);
Route::post('/api/new-transaction', [APIController::class, 'newTransaction']);
Route::get('/api/province', [APIController::class, 'getProvince']);
Route::get('/api/regency', [APIController::class, 'getRegency']);

Route::get('/login/oauth', [AuthController::class, 'redirectToProvider']);
Route::get('/login/oauth/callback', [AuthController::class, 'handleProviderCallback']);
// Route::post('/auth/{provider}/callback', [AuthController::class, 'newUser']);
