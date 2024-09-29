<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorOrderDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorOrderController extends Controller
{
    public function index(VendorOrderDataTable $dataTable) {}

    public function show(string $id) {}

    public function order_status(Request $request, string $id) {}
}
