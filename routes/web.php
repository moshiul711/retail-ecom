<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/',[WebsiteController::class,'index'])->name('website');
Route::get('/product/{id}/{name}',[WebsiteController::class, 'productDetail'])->name('product.detail');

// Cart Module
Route::get('/cart',[CartController::class,'index'])->name('cart');

// Checkout Module
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
