<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\VendorRequestDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorRequestController extends Controller
{
    public function index(VendorRequestDataTable $dataTable) {}

    public function show(string $id) {}

    public function changeStatus(Request $request, string $id) {}
}
