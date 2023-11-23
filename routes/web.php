<?php

use App\Http\Controllers\SellerInventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SellerOrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SellerHomeController;
use App\Http\Controllers\SellerChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('buyer.home')->middleware('redirectIfSeller');

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [LoginController::class, 'index']);
    Route::get('/signup', [SignupController::class, 'index']);

    Route::post('/signup/buyer', [SignupController::class, 'signup_buyer']);
    Route::post('/signup/seller', [SignupController::class, 'signup_seller']);

    Route::post('/login/buyer', [LoginController::class, 'login_buyer']);
    Route::post('/login/seller', [LoginController::class, 'login_seller']);
});

Route::middleware(['buyer'])->group(function() {
    Route::post('/logout/buyer', [LoginController::class, 'logout_buyer']);
});

Route::middleware(['seller'])->group(function() {
    Route::get('/dashboard', [SellerHomeController::class, 'index'])->name('seller.home');

    Route::get('/inventory', [SellerInventoryController::class, 'index']);
    Route::get('/inventory/add', [SellerInventoryController::class, 'display_inventory_add_view']);
    Route::post('/inventory/add', [SellerInventoryController::class, 'add_item']);

    Route::get('/order', [SellerOrderController::class, 'index']);

    Route::get('/admin_chat', [SellerChatController::class, 'index']);
    
    Route::post('/logout/seller', [LoginController::class, 'logout_seller']);
});

Route::get('/item', [ItemController::class, 'index']);