<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\Admin\UserOrderDataTable;
use App\Http\Controllers\Controller;

class UserOrderController extends Controller
{
    public function order_list(UserOrderDataTable $dataTable) {}

    public function show_order(string $id) {}
}
