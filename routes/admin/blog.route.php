<?php

use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogCommentController;
use App\Http\Controllers\Backend\BlogController;
use Illuminate\Support\Facades\Route;

Route::put('blog-category/status-change', [BlogCategoryController::class, 'change_status'])->name('blog-category.status-change');
Route::resource('blog-category', BlogCategoryController::class);

Route::put('blog/status-change', [BlogController::class, 'change_status'])->name('blog.status-change');
Route::resource('blog', BlogController::class);

Route::get('blog-comments', [BlogCommentController::class, 'index'])->name('blog-comments.index');
Route::delete('blog-comments/{id}/destroy', [BlogCommentController::class, 'destroy'])->name('blog-comments.destroy');
