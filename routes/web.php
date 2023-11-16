<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    # Home
    Route::get('/', [HomeController::class,'index']);

    # Register
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register_seller', [RegisterController::class,'register_seller']);
    Route::post('/register_buyer', [RegisterController::class,'register_buyer']);

    # Login
    Route::get('/login', [LoginController::class,'index'])->name('login');
    Route::post('/login', [LoginController::class,'auth']);
});

Route::middleware(['auth'])->group(function () {
    # Login
    Route::get('/logout', [LoginController::class,'logout']);

    # Dashboard
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::get('/item_add', [ItemController::class, 'item_add_view']);
    Route::post('/item_add', [ItemController::class, 'item_add']);
});