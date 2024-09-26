<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\ProductImageGalleryDataTable;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductImageGalleryController extends Controller
{
    public function index(Request $request, ProductImageGalleryDataTable $dataTable) {}

    public function store(Request $request) {}

    public function destroy(string $id) {}
}
