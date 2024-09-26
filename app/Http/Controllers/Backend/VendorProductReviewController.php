<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorProductReviewsDataTable;
use App\Http\Controllers\Controller;

class VendorProductReviewController extends Controller
{
    public function index(VendorProductReviewsDataTable $dataTable) {}
}
