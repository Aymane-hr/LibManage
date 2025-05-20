<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/shop-cart', function () {
    return view('shop-cart');
})->name('shop-cart');
Route::get('/shop-default', function () {
    return view('shop-default');
})->name('shop-default');
Route::get('/shop-details', function () {
    return view('shop-details');
})->name('shop-details');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
