<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;


Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/register',[AuthController::class,'index2'])->name('register');

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/shop-cart', [CartController::class,'index'])->name('shop-cart');
Route::get('/shop-default',[ProduitController::class,'index2'])->name('shop-default');
Route::get('/shop-details/{id}', [ProduitController::class,'index'])->name('shop-details');
Route::post('/shop-details/{id}', [ProduitController::class,'store'])->name('shop-details.store');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove-from-cart');
Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
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
