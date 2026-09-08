<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [CategoryController::class, 'index'])->name('category');
Route::get('/category/electronics/{slug}', [SubcategoryController::class, 'index'])->name('subcategory');
Route::get('/category/electronics/tv/{slug}', [ProductdetailController::class, 'index'])->name('productdetail');
Route::get('/cart-list/{slug}', [CartController::class, 'list'])->name('cart-list');
Route::get('/checkout/{slug}', [CheckoutController::class, 'index'])->name('checkout');
