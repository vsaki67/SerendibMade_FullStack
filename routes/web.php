<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');*/
Route::get('/index', function () {
    return view('index');
});
Route::get('/loginpg', function () {
    return view('loginpg');
});
Route::get('/productpage', function () {
    return view('productpage');
});
Route::get('/registrationform', function () {
    return view('registrationform');
});



// Product routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{category}', [ProductController::class, 'category'])->name('products.category');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
