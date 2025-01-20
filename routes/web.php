<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\RedirectIfNotAdmin;
use App\Http\Controllers\AfterPayController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\NewAddressController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminDiscountController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\DetailProduct2Controller;

// User
Route::middleware('guest')->group(function () {  
  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'loginAccount']);
  Route::get('/register', [AuthController::class, 'register']);
  Route::post('/register', [AuthController::class, 'submitAccount']);
  Route::get('/login/oauth', [AuthController::class, 'redirectToProvider']);
  Route::get('/login/oauth/callback', [AuthController::class, 'handleProviderCallback']);
  Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.request');
  Route::post('/forgot-password', [AuthController::class, 'sendResetPassword'])->name('password.email');
  Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('password.reset');
  Route::post('/reset-password', [AuthController::class, 'submitResetPassword'])->name('password.update');
});
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, "ProductDisplay"]);
Route::get('/product/{id_produk}', [ProductController::class, 'DetailProduct']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware('auth')->group(function () {  
  Route::get('/profile', [AuthController::class, 'profile']);
  Route::post('/profile', [AuthController::class, 'updateProfile']);
  Route::get('/profile/address', [AuthController::class, 'address']);
  Route::get('/profile/address/new', [AuthController::class, 'newAddress']);
  Route::post('/profile/address/new', [AuthController::class, 'storeAddress']);
  Route::get('/profile/address/{id_alamat}/edit', [AuthController::class, 'editAddress']);
  Route::post('/profile/address/{id_alamat}/edit', [AuthController::class, 'updateAddress']);
  Route::delete('/profile/address/{id_alamat}', [AuthController::class, 'deleteAddress']);
  Route::get('/history', [AuthController::class, 'history']);
  Route::get('/accsetting', [AuthController::class, 'accSetting']);
  Route::post('/accsetting/edit-password', [AuthController::class, 'editPassword']);
  Route::get('/favorites', [FavoriteController::class, "productFavorite"]);
  Route::post('/favorites/add', [FavoriteController::class, "addProduct"]);
  Route::post('/favorites/remove', [FavoriteController::class, "removeProduct"]);
  Route::get('/cart', [CartController::class, "cart"]);
  Route::post('/cart/updateQuantity', [CartController::class, "updateQuantity"]);
  Route::post('/cart/delete', [CartController::class, "deleteItem"]);
  Route::get('/cart/address', [CartController::class, "Address"]);
  Route::get('/cart/checkout', [CartController::class, "checkout"]);
  Route::get('/cart/shipping', [CartController::class, "Shipping"]);
  Route::get('/cart/payment', [CartController::class, "Payment"]);
  Route::post('/cart/add', [CartController::class, "addProduct"]);
  Route::get('/api/cekongkir', [APIController::class, 'cekOngkir']);
  Route::post('/api/midtrans-token', [APIController::class, 'midtransSnapToken']);
  Route::post('/api/new-transaction', [APIController::class, 'newTransaction']);
  Route::get('/api/province', [APIController::class, 'getProvince']);
  Route::get('/api/regency', [APIController::class, 'getRegency']);
});

// Admin
Route::middleware(RedirectIfNotAdmin::class)->group(function () {  
  Route::get('/admin', [AdminController::class, 'index']);
  Route::get('/admin/product', [AdminProductController::class, 'index']);
  Route::post('/admin/product/{id}/delete', [AdminProductController::class, 'destroy']);
  // Route::post('/admin/product/{id}/delete', [AdminProductController::class, "HapusProduct"]);
  Route::get('/admin/order', [AdminOrderController::class, "OrderAdmin"]);
  Route::post('/admin/order/status', [AdminOrderController::class, "updateStatus"]);
  Route::get('/admin/customer', [AdminCustomerController::class, 'CustomerAll']);
  Route::get('/admin/customer/detail', [AdminCustomerController::class, 'CustomerDetail']);
  Route::get('/admin/discount', [AdminDiscountController::class, 'Diskon']);
  Route::get('/admin/product/create', [AdminProductController::class, "addProduct"]);
  Route::post('/admin/product/create', [AdminProductController::class, "addProductSubmit"]);
  Route::get('/admin/product/{id_product}/edit', [AdminProductController::class, "editProduct"]);
  Route::post('/admin/product/{produk:id}/edit', [AdminProductController::class, "editProductSubmit"]);
  Route::get('/admin/customer/{user:id_user}', [AdminCustomerController::class, 'CustomerDetail']);
  Route::post('/admin/customer/{user:id_user}/edit', [AdminCustomerController::class, 'editProductSubmit']);
  Route::get('/admin/customer/{user:id_user}/edit', [AdminCustomerController::class, 'editCustomer']);
  Route::post('/admin/customer/{user:id_user}/edit', [AdminCustomerController::class, 'updateCustomer']);
  Route::post('/admin/customer/delete', [AdminCustomerController::class, 'deleteCustomer']);
  // Route::get('/admin/discount', [AdminDiscountController::class, 'Diskon']);
  Route::resource('/admin/discount', AdminDiscountController::class)->except(['show']);
});