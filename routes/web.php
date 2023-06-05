<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontSite\HomeController;
use App\Http\Controllers\FrontSite\ProductController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminHomeController;


// FrontSite Route

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/our-produtc', [ProductController::class, 'index'])->name('products');



// Admin Route
Route::get('/admin/home', [AdminHomeController::class, 'index']);

Route::get('/admin/add-produtc', [AdminProductController::class, 'index'])->name('add.product');
Route::post('/admin/create-produtc', [AdminProductController::class, 'create'])->name('create.product');
Route::get('/admin/manage-produtc', [AdminProductController::class, 'manage'])->name('manage.product');
