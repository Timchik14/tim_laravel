<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [PostsController::class, 'index'])->name('main');

Route::get('/about', [PostsController::class, 'about'])->name('about');

Route::get('/posts/create', [PostsController::class, 'create'])->name('post.create');

Route::post('/posts', [PostsController::class, 'store'])->name('posts');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('post.show');

Route::get('/contacts', [FeedbackController::class, 'create'])->name('contacts');

Route::post('/contacts', [FeedbackController::class, 'store']);

Route::get('/admin/feedbacks', [FeedbackController::class, 'show'])->name('admin.feedbacks');
