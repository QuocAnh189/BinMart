<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\TransactionDataTable;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index(TransactionDataTable $dataTable)
    {
        return $dataTable->render('admin.transaction.index');
    }
}
