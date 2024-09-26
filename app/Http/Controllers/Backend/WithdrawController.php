<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\WithdrawRequestDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index(WithdrawRequestDataTable $dataTable) {}

    public function show(string $id) {}

    public function update(Request $request, string $id) {}
}
