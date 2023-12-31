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
use App\Http\Controllers\TransactionController;
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
    Route::get('/profile', [ProfileBuyerController::class, 'index']);
    Route::get('/cart', [CartController::class, 'index']);

    Route::post('/payment', [PaymentController::class, 'index']);
    Route::post('/cart/add', [CartController::class, 'store']);
    Route::post('/cart/delete', [CartController::class, 'delete']);
    Route::post('/logout/buyer', [LoginController::class, 'logout_buyer']);
    Route::post('/transaction/add', [PaymentController::class, 'add_transaction']);
    Route::post('/order/received', [PaymentController::class, 'order_received']);
});


Route::middleware(['seller'])->group(function() {
    // Seller only
    Route::get('/dashboard', [DashboardController::class, 'view_home'])->name('seller.home');
    Route::get('/dashboard/order', [DashboardController::class, 'view_order']);

    Route::get('/dashboard/inventory', [DashboardController::class, 'view_inventory']);
    Route::get('/dashboard/item/add', [ItemController::class, 'item_add']);
    Route::get('/dashboard/item/{item:i_slug}', [ItemController::class, 'item_view']);

    Route::post('/logout/seller', [LoginController::class, 'logout_seller']);

    Route::post('/item/add', [ItemController::class, 'store']);
    Route::post('/item/edit', [ItemController::class, 'edit']);
    Route::post('/item/save_edit', [ItemController::class, 'save_edit']);
    Route::post('/item/delete', [ItemController::class, 'delete']);

    Route::post('/transaction/confirm', [PaymentController::class, 'transaction_confirm']);
});
