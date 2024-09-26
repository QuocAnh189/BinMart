<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\SellerProductsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerProductController extends Controller
{
    public function index(SellerProductsDataTable $dataTable) {}

    public function pendingProducts() {}

    public function changeApproveStatus(Request $request) {}
}
