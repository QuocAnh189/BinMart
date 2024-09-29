<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\CustomerListDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerListController extends Controller
{
    public function customer_list(CustomerListDataTable $dataTable)
    {
        return $dataTable->render('admin.customer-list.index');
    }

    public function change_status(Request $request)
    {
        $customer = User::findOrFail($request->id);
        $customer->status = $request->status === 'true' ? 'active' : 'inactive';
        $customer->save();

        return response(['message' => 'Status has been updated!']);
    }
}
