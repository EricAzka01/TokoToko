<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileBuyerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::middleware('redirectIfSeller')->group(function() {
    // Should be accessible by guest and buyer but not seller
    Route::get('/item/{item:i_slug}', [ItemController::class, 'index']);
    Route::get('/', [HomeController::class, 'index'])->name('buyer.home');
});
Route::middleware(['guest'])->group(function() {
    // Routes for guest
    Route::get('/login', [LoginController::class, 'index']);
    Route::get('/signup', [SignupController::class, 'index']);

    Route::post('/signup/buyer', [SignupController::class, 'signup_buyer']);
    Route::post('/signup/seller', [SignupController::class, 'signup_seller']);

    Route::post('/login/buyer', [LoginController::class, 'login_buyer']);
    Route::post('/login/seller', [LoginController::class, 'login_seller']);
});

Route::middleware(['buyer'])->group(function() {
    // Buyer only
    Route::post('/logout/buyer', [LoginController::class, 'logout_buyer']);
    Route::get('/profile', [ProfileBuyerController::class, 'index']);
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/payment', [PaymentController::class, 'index']);
    Route::post('/cart/add', [CartController::class, 'store']);
});


Route::middleware(['seller'])->group(function() {
    // Seller only
    Route::get('/dashboard', [DashboardController::class, 'view_home'])->name('seller.home');
    Route::get('/dashboard/order', [DashboardController::class, 'view_order']);
    Route::get('/dashboard/chat', [DashboardController::class, 'view_chat']);

    Route::get('/dashboard/inventory', [DashboardController::class, 'view_inventory']);
    Route::get('/dashboard/inventory/add', [InventoryController::class, 'index']);
    Route::post('/item/add', [ItemController::class, 'store']);
    
    Route::post('/logout/seller', [LoginController::class, 'logout_seller']);
});
