<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop-cart', function () {
    return view('shop-cart');
});
Route::get('/shop-default', function () {
    return view('shop-default');
});
Route::get('/shop-details', function () {
    return view('shop-details');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
