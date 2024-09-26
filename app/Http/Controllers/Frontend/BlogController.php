<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {}

    public function blog_details(string $slug) {}

    public function comment(Request $request) {}
}
