<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorProductVariantItemDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorProductVariantItemController extends Controller
{
    public function index(VendorProductVariantItemDataTable $dataTable) {}

    public function create() {}

    public function store(Request $request) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}

    public function change_status(Request $request) {}
}
