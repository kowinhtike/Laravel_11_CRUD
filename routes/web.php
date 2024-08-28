<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    return view('Auth.login');
});
Route::get('/register',function(){
    return view('Auth.register');
});
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');  // List all posts
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');  // Show form to create a new post
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');  // Store a new post
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');  // Show a single post
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');  // Show form to edit a post
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');  // Update an existing post
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');  // Delete a post
});
