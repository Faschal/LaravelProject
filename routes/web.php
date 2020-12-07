<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.add');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.update');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');

