<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('product.list');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.detail');
Route::post('/search', [ProductController::class, 'search'])->name('search');

// Các route khác như hỗ trợ, liên hệ, giỏ hàng, v.v.
Route::get('/how-to-buy', function () {
    return view('how_to_buy');
})->name('howToBuy');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');
