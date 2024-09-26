<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartDetails() {}

    /** Add item to cart */
    public function addToCart(Request $request) {}

    /** Update product quantity */
    public function updateProductQty(Request $request) {}

    /** get product total */
    public function getProductTotal($rowId) {}

    /** get cart total amount */
    public function cartTotal() {}

    /** clear all cart products */
    public function clearCart() {}

    /** Remove product form cart */
    public function removeProduct($rowId) {}

    /** Get cart count */
    public function getCartCount() {}

    /** Get all cart products */
    public function getCartProducts() {}

    /** Remove product form sidebar cart */
    public function removeSidebarProduct(Request $request) {}

    /** Apply coupon */
    public function applyCoupon(Request $request) {}

    /** Calculate coupon discount */
    public function couponCalculation() {}
}
