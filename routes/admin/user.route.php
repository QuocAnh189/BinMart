<?php

use App\Http\Controllers\Backend\ManageUserController;
use Illuminate\Support\Facades\Route;

Route::get('manage-user', [ManageUserController::class, 'index'])->name('manage-user.index');
Route::post('manage-user', [ManageUserController::class, 'create'])->name('manage-user.create');
