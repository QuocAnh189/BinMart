<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserVendorRequestController;
use Illuminate\Support\Facades\Route;

/** Vendor route */
Route::get('vendor-list', [HomeController::class, 'vendor_list'])->name('vendor.list');
Route::get('vendor-product/{id}', [HomeController::class, 'vendor_products'])->name('vendor.products');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('vendor-request', [UserVendorRequestController::class, 'vendor_request'])->name('vendor-request.index');
    Route::post('vendor-request', [UserVendorRequestController::class, 'create_vendor_request'])->name('vendor-request.create');
});
