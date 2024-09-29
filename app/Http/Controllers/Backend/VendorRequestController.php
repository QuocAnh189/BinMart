<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Vendor\VendorRequestDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorRequestController extends Controller
{
    public function vendor_requests_list(VendorRequestDataTable $dataTable)
    {
        return $dataTable->render('admin.vendor-request.index');
    }

    public function show(string $id)
    {
        $vendor = Vendor::findOrFail($id);

        return view('admin.vendor-request.show', compact('vendor'));
    }

    public function change_status(Request $request, string $id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->status = $request->status;
        $vendor->save();

        $user = User::findOrFail($vendor->user_id);
        $user->role = 'vendor';
        $user->save();

        //        toastr('Updated successfully!', 'success', 'success');

        flash()->success('aUpdated successfully!');

        return redirect()->route('admin.vendor-requests.index');
    }
}
