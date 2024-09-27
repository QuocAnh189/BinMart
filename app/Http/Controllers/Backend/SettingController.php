<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUploadTrait;

    public function index() {}

    public function generalSettingUpdate(Request $request) {}

    public function emailConfigSettingUpdate(Request $request) {}

    public function logoSettingUpdate(Request $request) {}

    /** Pusher settings update */
    public function pusherSettingUpdate(Request $request) {}
}
