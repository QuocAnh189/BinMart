<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart_details() {}

    /** Add item to cart */
    public function add_to_cart(Request $request) {}

    /** Update product quantity */
    public function update_product_qty(Request $request) {}

    /** get product total */
    public function get_product_total($rowId) {}

    /** get cart total amount */
    public function cart_total() {}

    /** clear all cart products */
    public function clear_cart() {}

    /** Remove product form cart */
    public function remove_product($rowId) {}

    /** Get cart count */
    public function get_cart_count() {}

    /** Get all cart products */
    public function get_cart_products() {}

    /** Remove product form sidebar cart */
    public function remove_sidebar_product(Request $request) {}

    /** Apply coupon */
    public function coupon_apply(Request $request) {}

    /** Calculate coupon discount */
    public function coupon_calculation() {}
}
