<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/foodbaverage', [ProductController::class, 'foodBaverage'])->name('products.food');
    Route::get('/beautyhealth', [ProductController::class, 'beautyHealth'])->name('products.beauty');
    Route::get('/homecare', [ProductController::class, 'homeCare'])->name('products.home');
    Route::get('/babykid', [ProductController::class, 'babyKid'])->name('products.baby');

});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.transaksi');