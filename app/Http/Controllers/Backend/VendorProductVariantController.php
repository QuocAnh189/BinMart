<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorProductVariantDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorProductVariantController extends Controller
{
    public function index(Request $request, VendorProductVariantDataTable $dataTable) {}

    public function create() {}

    public function store(Request $request) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}

    public function changeStatus(Request $request) {}
}
