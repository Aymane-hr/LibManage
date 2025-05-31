<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/shop-default', [ProduitController::class, 'index2'])->name('shop-default');
Route::get('/shop-default/{id_categorie}', [ProduitController::class, 'indexRcherche'])->name('shop-default-filter');
Route::post('/shop-default', [ProduitController::class, 'search'])->name('shop-default-search');
Route::get('/shop-details/{id}', [ProduitController::class, 'index'])->name('shop-details');
Route::post('/shop-details/{id}', [ProduitController::class, 'store'])->name('shop-details.store');
Route::middleware('auth')->group(function () {
    Route::get('/shop-cart', [CartController::class, 'index'])->name('shop-cart');
    Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::delete('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove-from-cart');
    Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('clear-cart');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/blog-details/{id}', function ($id) {

    $blog = Blog::find($id);
    if (!$blog) {
        abort(404);
    }
    $titre = $blog->titre;
    $description = $blog->contenu;
    $images = $blog->images;
    return view('blog-details', compact('titre', 'description', 'images'));
})->name('blog-details');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::middleware('auth')->group(function () {
    Route::post('/save-favori/{id}', [ProduitController::class, 'save'])->name('save-favori');
    Route::get('/favoris', [ProduitController::class, 'showFavoris'])->name('favoris');
    Route::delete('/favoris/{id}', [ProduitController::class, 'deleteFavori'])->name('favoris.delete');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
