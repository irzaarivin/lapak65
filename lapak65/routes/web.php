<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/account', [AuthController::class, 'index'])->name('login');
Route::get('/account/', [AuthController::class, 'index']);

Route::get('/checkout', [ProductController::class, 'checkout']);
Route::post('/checkout-submit', [ProductController::class, 'checkoutSubmit']);

Route::get('/shop', [ProductController::class, 'shop']);
Route::get('/shop/', [ProductController::class, 'shop']);

Route::post('/shop', [ProductController::class, 'search']);

Route::get('/add-wishlist', [ProductController::class, 'addWishlist']);
Route::get('/delete-wishlist', [ProductController::class, 'deleteWishlist']);

Route::get('/add-cart', [ProductController::class, 'addCart']);
Route::get('/delete-cart', [ProductController::class, 'deleteCart']);

Route::get('/product/{product}', [ProductController::class, 'product']);
Route::get('/wishlist', [ProductController::class, 'wishlist'])->middleware('auth');