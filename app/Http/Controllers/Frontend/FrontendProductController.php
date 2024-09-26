<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    public function index(Request $request) {}

    /** Show product detail page */
    public function show_product(string $slug) {}

    public function change_list_view(Request $request) {}
}
