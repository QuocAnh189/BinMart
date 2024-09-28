<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\FlashSaleItemDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
    public function index(FlashSaleItemDataTable $dataTable) {}

    public function update(Request $request) {}

    public function add_product(Request $request) {}

    public function change_show_at_home_status(Request $request) {}

    public function change_status(Request $request) {}

    public function destroy(string $id) {}
}
