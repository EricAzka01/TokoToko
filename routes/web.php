<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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
    Route::get('/dashboard', [DashboardController::class, 'view_home'])->name('seller.home');
    Route::get('/dashboard/order', [DashboardController::class, 'view_order']);
    Route::get('/dashboard/chat', [DashboardController::class, 'view_chat']);

    Route::get('/dashboard/inventory', [DashboardController::class, 'view_inventory']);
    Route::get('/dashboard/inventory/add', [InventoryController::class, 'index']);
    Route::post('/item/add', [ItemController::class, 'store']);

    Route::post('/logout/seller', [LoginController::class, 'logout_seller']);
});

Route::get('/item', [ItemController::class, 'index']);