<?php

use App\Http\Controllers\HomeController;
use App\Models\Blog;
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
Route::get('/blog-details/{id}', function ($id) {

    $blog=Blog::find($id);
    if (!$blog) {
        abort(404);
    }
    $titre = $blog->titre;
    $description = $blog->contenu;
    $images=$blog->images;
    return view('blog-details',compact('titre', 'description','images'));
})->name('blog-details');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
