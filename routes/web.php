<?php

// Route for checkout page
Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('frontend.checkout');

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SearchController;


// Homeoage and other frontend routes
Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/shop', function () {
    return view('frontend.shop');
})->name('frontend.shop');
Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');
Route::get('/search', [SearchController::class, 'search'])->name('frontend.search');
Route::get('/cart', function () {
    return view('frontend.cart');
})->name('frontend.cart');

// Product page
Route::get('/product', function () {
    $product = (object) [
        'name' => 'Chinese Cabbage',
        'price' => 17.28,
        'old_price' => 20.00,
        'brand' => 'Local Farm',
        'image' => 'chinese-cabbage.jpg',
        'category' => 'Vegetables',
        'tags' => 'Vegetables, Healthy, Chinese Cabbage, Green Cabbage',
    ];
    $relatedProducts = [];
    return view('frontend.product', compact('product', 'relatedProducts'));
})->name('frontend.product');

