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

Route::get('/', [HomeController::class,'index'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'auth'])->middleware('guest');
Route::get('/logout', [LoginController::class,'logout'])->middleware('auth');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory')->middleware('auth');
Route::get('/item_add', [ItemController::class, 'item_add_view'])->middleware('auth');
Route::post('/item_add', [ItemController::class, 'item_add'])->middleware('auth');