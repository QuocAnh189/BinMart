<?php

use App\Http\Controllers\Backend\VendorWithdrawController;
use Illuminate\Support\Facades\Route;

/** Withdraw route */
Route::get('withdraw-request/{id}', [VendorWithdrawController::class, 'showRequest'])->name('withdraw-request.show');
Route::resource('withdraw', VendorWithdrawController::class);
