<?php

use App\Http\Controllers\Frontend\UserAddressController;
use Illuminate\Support\Facades\Route;

/** Address route */
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('address', [UserAddressController::class, 'address_list'])->name('address.list');
    Route::get('address/create', [UserAddressController::class, 'view_create_address'])->name('address.view.create');
    Route::post('address', [UserAddressController::class, 'create_address'])->name('address.create');
    Route::get('address/{id}', [UserAddressController::class, 'view_update_address'])->name('address.view.update');
    Route::put('address/{id}', [UserAddressController::class, 'update_address'])->name('address.update');
    Route::delete('address', [UserAddressController::class, 'delete_address'])->name('address.delete');
});
