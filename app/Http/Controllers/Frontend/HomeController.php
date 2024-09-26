<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.home');
    }

    public function getTypeBaseProduct() {}

    public function vendor() {}

    public function vendor_products(string $id) {}

    public function show_product_modal(string $id) {}
}
