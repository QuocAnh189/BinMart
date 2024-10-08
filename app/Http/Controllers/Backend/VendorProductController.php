<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorProductDataTable;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class VendorProductController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(VendorProductDataTable $dataTable) {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}

    public function change_status(Request $request) {}

    /**
     * Get all product sub categories
     */
    public function get_sub_categories(Request $request) {}

    public function get_child_categories(Request $request) {}
}
