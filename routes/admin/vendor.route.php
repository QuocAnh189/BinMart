<?php

use App\Http\Controllers\Backend\AdminVendorProfileController;
use App\Http\Controllers\Backend\VendorConditionController;
use App\Http\Controllers\Backend\VendorListController;
use Illuminate\Support\Facades\Route;

Route::resource('vendor-profile', AdminVendorProfileController::class);
Route::get('vendor-list', [VendorListController::class, 'index'])->name('vendor-list.index');
Route::put('vendor-list/status-change', [VendorListController::class, 'change_status'])->name('vendor-list.status-change');

Route::get('vendor-condition', [VendorConditionController::class, 'index'])->name('vendor-condition.index');
Route::put('vendor-condition/update', [VendorConditionController::class, 'update'])->name('vendor-condition.update');
