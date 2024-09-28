<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    use ImageUploadTrait;

    public function index() {}

    public function homepage_banner_section_one(Request $request) {}

    public function homepage_banner_section_two(Request $request) {}

    public function homepage_banner_section_three(Request $request) {}

    public function homepage_banner_section_four(Request $request) {}

    public function product_page_banner(Request $request) {}

    public function cart_page_banner(Request $request) {}
}
