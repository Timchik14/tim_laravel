<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TagsController;

Route::get('/posts/tags/{tag}', [TagsController::class, 'index'])->name('tags');
Route::get('/about', [PostsController::class, 'about'])->name('about');
Route::resource('/posts', PostsController::class);

Route::get('/contacts/feedbacks', [FeedbackController::class, 'show'])->name('contacts.feedbacks');
Route::get('/contacts', [FeedbackController::class, 'create'])->name('contacts');
Route::post('/contacts', [FeedbackController::class, 'store']);
