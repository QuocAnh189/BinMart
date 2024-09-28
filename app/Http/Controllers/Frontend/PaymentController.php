<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment() {}

    public function payment_success() {}

    public function pay_with_paypal() {}

    public function paypalConfig() {}

    public function paypal_success(Request $request) {}

    public function storeOrder($paymentMethod, $paymentStatus, $transactionId, $paidAmount, $paidCurrencyName) {}

    public function clearSession() {}

    public function paypal_cancel() {}

    public function pay_with_stripe(Request $request) {}

    public function pay_with_razorpay(Request $request) {}

    public function pay_with_code(Request $request) {}
}
