<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    /**
     * Display a listing of address
     */
    public function address_list() {}

    /**
     * Show the form for creating a address
     */
    public function view_create_address() {}

    /**
     * Create address
     */
    public function create_address(Request $request) {}

    /**
     * Show the form for updating a address
     */
    public function view_update_address(string $id) {}

    /**
     * Update address
     */
    public function update_address(Request $request, string $id) {}

    /**
     * Remove address
     */
    public function delete_address(string $id) {}
}
