<?php

use App\Http\Controllers\Frontend\CheckOutController;
use Illuminate\Support\Facades\Route;

/** Checkout route */
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('checkout', [CheckOutController::class, 'checkout'])->name('checkout');
    Route::post('checkout/address-create', [CheckOutController::class, 'create_address'])->name('checkout.address.create');
    Route::post('checkout/form-submit', [CheckOutController::class, 'checkout_form_submit'])->name('checkout.form-submit');
});
