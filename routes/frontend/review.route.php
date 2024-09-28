<?php

use App\Http\Controllers\Frontend\ReviewController;
use Illuminate\Support\Facades\Route;

/** Review route */
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('reviews', [ReviewController::class, 'review_list'])->name('review.list');
    Route::post('review', [ReviewController::class, 'create_review'])->name('review.create');
});
