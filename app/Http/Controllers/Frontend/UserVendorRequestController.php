<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class UserVendorRequestController extends Controller
{
    use ImageUploadTrait;

    public function vendor_request() {}

    public function create_vendor_request(Request $request) {}
}
