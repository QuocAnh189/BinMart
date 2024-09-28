<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    public function product_list(Request $request) {}

    public function show_product_detail(string $slug) {}

    public function change_list_view(Request $request) {}
}
