<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\AdminReviewDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index(AdminReviewDataTable $dataTable) {}

    public function changeStatus(Request $request) {}
}
