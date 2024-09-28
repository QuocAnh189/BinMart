<?php

use App\Http\Controllers\Backend\CouponController;
use Illuminate\Support\Facades\Route;

/** Coupon Route */
Route::put('coupons/change-status', [CouponController::class, 'change_status'])->name('coupons.change-status');
Route::resource('coupons', CouponController::class);
