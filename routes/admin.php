<?php

use App\Http\Controllers\Admin\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/product-details', [ProductController::class, 'productDetails'])->name('product-details');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/orders-history', [OrderController::class, 'ordersHistory'])->name('orders-history');
