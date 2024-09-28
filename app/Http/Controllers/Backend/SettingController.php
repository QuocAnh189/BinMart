<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUploadTrait;

    public function index() {}

    public function general_setting_update(Request $request) {}

    public function email_config_setting_update(Request $request) {}

    public function logo_setting_update(Request $request) {}

    public function pusher_setting_update(Request $request) {}
}
