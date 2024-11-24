<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// In routes/web.php or routes/api.php
Route::get('/api/products', [ProductController::class, 'getProducts']);


// Show all categories
Route::get('/admin/categories', [ProductController::class, 'show_categories'])->name('admin.show_categories');

// Show create category form
Route::get('/admin/categories/create', [ProductController::class, 'show_create_category'])->name('admin.create_category');

// Store a new category
Route::post('/admin/categories', [ProductController::class, 'store_category'])->name('admin.store_category');

// Show edit category form
Route::get('/admin/categories/{id}/edit', [ProductController::class, 'show_edit_category'])->name('admin.edit_category');

// Update a category
Route::put('/admin/categories/{id}', [ProductController::class, 'update_category'])->name('admin.update_category');

// Delete a category
Route::delete('/admin/categories/{id}', [ProductController::class, 'delete_category'])->name('admin.delete_category');

Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.show_products');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.create_product');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.edit_product');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.delete_product');
Route::get('/admin/products/search', [ProductController::class, 'search'])->name('admin.search_products');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.store_product');
Route::put('/admin/products/{id}/update', [ProductController::class, 'update'])->name('admin.update_product');  // Changed to PUT




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin-panel', function () {
    return view('admin.show_order');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/shop', [HomeController::class,'shop'])->name('shop');
Route::get('/blogs', [HomeController::class,'blog'])->name('blog');
Route::get('/store-location', [HomeController::class,'storeloc'])->name('storeloc');
Route::get('/depo-application', [HomeController::class,'depo'])->name('depo');
Route::get('/about-us', [HomeController::class,'aboutus'])->name('about');
Route::get('/privacy-policy', [HomeController::class,'privacy'])->name('privacy');
Route::get('/terms-and-condition', [HomeController::class,'policy'])->name('policy');
Route::get('/order-now', [HomeController::class,'order'])->name('order');






require __DIR__.'/auth.php';
