<?php

use App\Http\Controllers\Backend\VendorRequestController;
use Illuminate\Support\Facades\Route;

Route::get('vendor-requests', [VendorRequestController::class, 'index'])->name('vendor-requests.index');
Route::get('vendor-requests/{id}/show', [VendorRequestController::class, 'show'])->name('vendor-requests.show');
Route::put('vendor-requests/{id}/change-status', [VendorRequestController::class, 'change_status'])->name('vendor-requests.change-status');
