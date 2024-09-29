<?php

use App\Http\Controllers\Backend\VendorProductReviewController;
use Illuminate\Support\Facades\Route;

/** Reviews route */
Route::get('reviews', [VendorProductReviewController::class, 'index'])->name('reviews.index');
