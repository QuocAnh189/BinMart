<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {}

    public function paymentSuccess() {}

    public function payWithPaypal() {}

    public function paypalConfig() {}

    public function paypalSuccess(Request $request) {}

    public function storeOrder($paymentMethod, $paymentStatus, $transactionId, $paidAmount, $paidCurrencyName) {}

    public function clearSession() {}

    public function paypalCancel() {}

    /** Stripe Payment */
    public function payWithStripe(Request $request) {}

    /** Razorpay payment */
    public function payWithRazorPay(Request $request) {}

    /** pay with cod */
    public function payWithCod(Request $request) {}
}
