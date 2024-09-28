<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\AdminListDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminListController extends Controller
{
    public function index(AdminListDataTable $dataTable) {}

    public function change_status(Request $request) {}

    public function destroy(string $id) {}
}
