<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\WithdrawMethodDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawMethodController extends Controller
{
    public function index(WithdrawMethodDataTable $dataTable) {}

    public function create() {}

    public function store(Request $request) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}
}
