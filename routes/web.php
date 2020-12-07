<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/users', [UserController::class, 'index'])->name('user.index');