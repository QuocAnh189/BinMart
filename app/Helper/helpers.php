<?php

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Session;

/** Set Sidebar item active */
function setActive(array $route)
{
    if (is_array($route)) {
        foreach ($route as $r) {
            if (request()->routeIs($r)) {
                return 'active';
            }
        }
    }
}

function checkDiscount($product): bool
{
    $currentDate = date('Y-m-d');

    if ($product->offer_price > 0 && $currentDate >= $product->offer_start_date && $currentDate <= $product->offer_end_date) {
        return true;
    }

    return false;
}

/** Calculate discount percent */
function calculateDiscountPercent($originalPrice, $discountPrice): float|int
{
    $discountAmount = $originalPrice - $discountPrice;
    $discountPercent = ($discountAmount / $originalPrice) * 100;

    return round($discountPercent);
}

/** Check the product type */
function productType($type): string
{
    return match ($type) {
        'new_arrival' => 'New',
        'featured_product' => 'Featured',
        'top_product' => 'Top',
        'best_product' => 'Best',
        default => '',
    };
}

/** get total cart amount */
function getCartTotal(): float
{
    $total = 0;
    foreach (\Cart::content() as $product) {
        $total += ($product->price + $product->options->variants_total) * $product->qty;
    }

    return $total;
}

/** get payable total amount */
function getMainCartTotal()
{
    if (Session::has('coupon')) {
        $coupon = Session::get('coupon');
        $subTotal = getCartTotal();
        if ($coupon['discount_type'] === 'amount') {
            return $subTotal - $coupon['discount'];
        } elseif ($coupon['discount_type'] === 'percent') {
            $discount = $subTotal - ($subTotal * $coupon['discount'] / 100);

            return $subTotal - $discount;
        }
    } else {
        return getCartTotal();
    }
}

/** get cart discount */
function getCartDiscount()
{
    if (Session::has('coupon')) {
        $coupon = Session::get('coupon');
        $subTotal = getCartTotal();
        if ($coupon['discount_type'] === 'amount') {
            return $coupon['discount'];
        } elseif ($coupon['discount_type'] === 'percent') {
            return $subTotal - ($subTotal * $coupon['discount'] / 100);
        }
    } else {
        return 0;
    }
}

/** get selected shipping fee from session */
function getShippingFee()
{
    if (Session::has('shipping_method')) {
        return Session::get('shipping_method')['cost'];
    } else {
        return 0;
    }
}

/** get payable amount */
function getFinalPayableAmount()
{
    return getMainCartTotal() + getShippingFee();
}

/** lemit text */
function limitText($text, $limit = 20)
{
    return \Str::limit($text, $limit);
}

function getCurrencyIcon()
{
    $icon = GeneralSetting::first();

    return $icon->currency_icon;
}
