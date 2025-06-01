<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;



// Home page route
Route::get('/', [HomeController::class, 'index']);

// Shop routes
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Shop with default listing
Route::get('/shop-default', [ProduitController::class, 'index2'])->name('shop-default');

// Shop filtered by category
Route::get('/shop-default/{id_categorie}', [ProduitController::class, 'indexRcherche'])->name('shop-default-filter');

// Shop search
Route::post('/shop-default', [ProduitController::class, 'search'])->name('shop-default-search');

// Product details
Route::get('/shop-details/{id}', [ProduitController::class, 'index'])->name('shop-details');

// Add product (e.g., to cart or wishlist) from details page
Route::post('/shop-details/{id}', [ProduitController::class, 'store'])->name('shop-details.store');

// View cart (public)
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');

// Cart operations (protected by auth middleware)
Route::middleware('auth')->group(function () {
    // View authenticated user's cart
    Route::get('/shop-cart', [CartController::class, 'index'])->name('shop-cart');
    // Add item to cart
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
    // Remove item from cart
    Route::delete('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove-from-cart');
    // Clear cart
    Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');
});

// Checkout page
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Blog details page




// Favoris (favorites) operations (protected by auth middleware)
Route::middleware('auth')->group(function () {
    // Save product to favorites
    Route::post('/save-favori/{id}', [ProduitController::class, 'save'])->name('save-favori');
    // Show user's favorites
    Route::get('/favoris', [ProduitController::class, 'showFavoris'])->name('favoris');
    // Delete favorite
    Route::delete('/favoris/{id}', [ProduitController::class, 'deleteFavori'])->name('favoris.delete');
});

// Authentication routes (login, register, etc.)
Auth::routes();

// Home route (after login)
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');



//blogs

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog-details');




