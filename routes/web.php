<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontSite\HomeController;
use App\Http\Controllers\FrontSite\ProductController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/our-produtc', [ProductController::class, 'index'])->name('products');
