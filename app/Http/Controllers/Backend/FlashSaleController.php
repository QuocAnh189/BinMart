<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\FlashSaleItemDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
    public function index(FlashSaleItemDataTable $dataTable) {}

    public function update(Request $request) {}

    public function addProduct(Request $request) {}

    public function changeShowAtHomeStatus(Request $request) {}

    public function changeStatus(Request $request) {}

    public function destroy(string $id) {}
}
