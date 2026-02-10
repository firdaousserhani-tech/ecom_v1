<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Product; // Don't forget to import the Model!

// Welcome page - Now fetching products from phpMyAdmin
Route::get('/', function () {
    $products = Product::all(); 
    return view('welcome', compact('products'));
});

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [AdminController::class, 'submitContact'])->name('contact.submit');

// Buy page
Route::get('/buy', function () {
    return view('buy');
})->name('buy');

Route::post('/buy', [AdminController::class, 'processOrder'])->name('buy.process');

// Admin routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
Route::post('/admin/products/delete', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');