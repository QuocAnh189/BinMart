<?php

use App\Http\Controllers\Backend\AdminReviewController;
use Illuminate\Support\Facades\Route;

Route::get('reviews', [AdminReviewController::class, 'index'])->name('reviews.index');
Route::put('reviews/change-status', [AdminReviewController::class, 'change_status'])->name('reviews.change-status');
