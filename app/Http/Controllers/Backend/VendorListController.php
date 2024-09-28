<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorListDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorListController extends Controller
{
    public function index(VendorListDataTable $dataTable) {}

    public function change_status(Request $request) {}
}
