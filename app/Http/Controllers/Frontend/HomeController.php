<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Cache::rememberForever('sliders', function () {
            return Slider::where('status', 1)->orderBy('serial', 'asc')->get();
        });

        return view('frontend.home.home', data: compact('sliders'));
    }

    public function getTypeBaseProduct() {}

    public function vendor() {}

    public function vendor_products(string $id) {}

    public function show_product_modal(string $id) {}
}
