<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\CustomerListDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerListController extends Controller
{
    public function index(CustomerListDataTable $dataTable) {}

    public function change_status(Request $request) {}
}
