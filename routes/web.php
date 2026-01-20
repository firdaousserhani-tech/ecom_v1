<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// صفحة "من نحن"
Route::get('/about', function () {
    return view('about');
})->name('about');

// صفحة "اتصل بنا"
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Handle contact form submission
Route::post('/contact', [AdminController::class, 'submitContact'])->name('contact.submit');

// Buy page
Route::get('/buy', function () {
    return view('buy');
})->name('buy');

// Handle buy form submission
Route::post('/buy', [AdminController::class, 'processOrder'])->name('buy.process');

// Admin routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');