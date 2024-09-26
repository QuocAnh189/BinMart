<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    public function productsIndex(Request $request) {}

    /** Show product detail page */
    public function showProduct(string $slug) {}

    public function changeListView(Request $request) {}
}
