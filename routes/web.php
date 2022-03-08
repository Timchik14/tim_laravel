<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\FeedbacksController;
use Illuminate\Support\Facades\Route;


Route::get('/about', [ArticlesController::class, 'about'])->name('about');

Route::resource('/articles', ArticlesController::class);

Route::get('/contacts', [FeedbacksController::class, 'create'])->name('contacts');
Route::post('/contacts', [FeedbacksController::class, 'store']);
Route::get('/admin/feedbacks', [FeedbacksController::class, 'show'])->name('admin.feedbacks');
