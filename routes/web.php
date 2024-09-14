<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Website //

// HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');

// PagesController
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/post-message', [ContactFormController::class, 'postMessage'])->name('post-message');

// ProductController
Route::get('/product01', [ProductController::class, 'product01'])->name('product01');
Route::get('/product02', [ProductController::class, 'product02'])->name('product02');
Route::get('/product03', [ProductController::class, 'product03'])->name('product03');
Route::get('/product04', [ProductController::class, 'product04'])->name('product04');
Route::get('/product05', [ProductController::class, 'product05'])->name('product05');
Route::get('/product06', [ProductController::class, 'product06'])->name('product06');
Route::get('/product07', [ProductController::class, 'product07'])->name('product07');
Route::get('/product08', [ProductController::class, 'product08'])->name('product08');
Route::get('/product09', [ProductController::class, 'product09'])->name('product09');
Route::get('/product10', [ProductController::class, 'product10'])->name('product10');
Route::get('/product11', [ProductController::class, 'product11'])->name('product11');
Route::get('/product12', [ProductController::class, 'product12'])->name('product12');
Route::get('/product13', [ProductController::class, 'product13'])->name('product13');
Route::get('/product14', [ProductController::class, 'product14'])->name('product14');
Route::get('/product15', [ProductController::class, 'product15'])->name('product15');
