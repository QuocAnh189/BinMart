<?php

use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;

/** Profile Route */
Route::get('profile', [VendorProfileController::class, 'index'])->name('profile');
Route::put('profile', [VendorProfileController::class, 'update_profile'])->name('profile.update');
Route::post('profile', [VendorProfileController::class, 'update_password'])->name('profile.update.password');
