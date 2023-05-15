<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontSite\HomeController;
use App\Http\Controllers\FrontSite\ProductController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
//Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/our-produtc', [ProductController::class, 'index'])->name('products');
