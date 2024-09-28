<?php

use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Route;

/** Blog route */
Route::get('blog', [BlogController::class, 'blog_list'])->name('blog.list');
Route::get('blog-detail/{slug}', [BlogController::class, 'blog_detail'])->name('blog.detail');

Route::post('blog-comment', [BlogController::class, 'comment_blog'])
    ->prefix('user')
    ->middleware('auth', 'verified')
    ->name('user.blog.comment');
