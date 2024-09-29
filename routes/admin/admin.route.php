<?php

use App\Http\Controllers\Backend\AdminListController;
use Illuminate\Support\Facades\Route;

/** Admin Route */
Route::get('admin-list', [AdminListController::class, 'admin_list'])->name('admin-list.index');
Route::put('admin-list/status-change', [AdminListController::class, 'change_status'])->name('admin-list.status-change');
Route::delete('admin-list/{id}', [AdminListController::class, 'destroy'])->name('admin-list.destroy');
