<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FLuentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\PaymentGateway\Payment;
use App\Http\Controllers\MailController;

// Route::get('/{locale}', function($locale) {
//   App::setLocale($locale);
//   return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');

// Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.add');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.update');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.delete');

Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getallpost');
Route::get('/add-post', [PostController::class, 'addPost'])->name('post.add');
Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('post.addsubmit');
Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getById');
Route::delete('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');
Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');
Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');
Route::get('/inner-join', [PostController::class, 'innerJoin'])->name('post.innerjoin');
Route::get('/left-join', [PostController::class, 'leftJoin'])->name('post.leftjoin');

Route::get('/all-posts', [PostController::class, 'getAllPostsUsingModel'])->name('post.getallpostmodel');

Route::get('/test', function(){
  return view('test');
});

Route::get('/home', function(){
  return view('index');
});

Route::get('/about', function(){
  return view('about');
});

Route::get('/contact', function(){
  return view('contact');
});

Route::get('/users', [PaginationController::class, 'allUser']);

Route::get('/upload', [UploadController::class, 'uploadForm']);

Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.uploadfile');

Route::get('/payment', function() {
  return Payment::process();
});

Route::get('/send-email', [MailController::class, 'sendEmail']);