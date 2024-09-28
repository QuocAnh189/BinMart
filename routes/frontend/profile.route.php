<?php

use App\Http\Controllers\Frontend\UserProfileController;
use Illuminate\Support\Facades\Route;

/** Profile route */
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('profile', [UserProfileController::class, 'profile'])->name('profile');
    Route::put('profile', [UserProfileController::class, 'update_profile'])->name('profile.update');
    Route::post('profile', [UserProfileController::class, 'update_password'])->name('profile.update.password');
});
