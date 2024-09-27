<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorProductImageGalleryDataTable;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class VendorProductImageGalleryController extends Controller
{
    use ImageUploadTrait;

    public function index(Request $request, VendorProductImageGalleryDataTable $dataTable) {}

    public function store(Request $request) {}

    public function destroy(string $id) {}
}
