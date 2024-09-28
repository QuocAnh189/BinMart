<?php

use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('generale-setting-update', [SettingController::class, 'general_setting_update'])->name('generale-setting-update');
Route::put('email-setting-update', [SettingController::class, 'email_config_setting_update'])->name('email-setting-update');
Route::put('logo-setting-update', [SettingController::class, 'logo_setting_update'])->name('logo-setting-update');
Route::put('pusher-setting-update', [SettingController::class, 'pusher_setting_update'])->name('pusher-setting-update');
