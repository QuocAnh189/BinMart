<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    use ImageUploadTrait;

    public function index() {}

    public function homepageBannerSessionOne(Request $request) {}

    public function homepageBannerSessionTwo(Request $request) {}

    public function homepageBannerSessionThree(Request $request) {}

    public function homepageBannerSessionFour(Request $request) {}

    public function productPageBanner(Request $request) {}

    public function cartPageBanner(Request $request) {}
}
