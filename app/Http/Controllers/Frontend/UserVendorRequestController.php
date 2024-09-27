<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class UserVendorRequestController extends Controller
{
    use ImageUploadTrait;

    public function index() {}

    public function create(Request $request) {}
}
