<?php

use App\Http\Controllers\Frontend\PaymentController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    /** Payment Routes */
    Route::get('payment', [PaymentController::class, 'payment'])->name('payment');
    Route::get('payment-success', [PaymentController::class, 'payment_success'])->name('payment.success');

    /** Paypal routes */
    Route::get('paypal/payment', [PaymentController::class, 'pay_with_paypal'])->name('paypal.payment');
    Route::get('paypal/success', [PaymentController::class, 'paypal_success'])->name('paypal.success');
    Route::get('paypal/cancel', [PaymentController::class, 'paypal_cancel'])->name('paypal.cancel');

    /** Stripe routes */
    Route::post('stripe/payment', [PaymentController::class, 'pay_with_stripe'])->name('stripe.payment');

    /** Razorpay routes */
    Route::post('razorpay/payment', [PaymentController::class, 'pay_with_razorpay'])->name('razorpay.payment');

    /** Cod routes */
    Route::get('cod/payment', [PaymentController::class, 'pay_with_code'])->name('cod.payment');
});
