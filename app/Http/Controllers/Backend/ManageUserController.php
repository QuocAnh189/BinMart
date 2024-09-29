<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\AccountCreatedMail;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ManageUserController extends Controller
{
    public function index()
    {
        return view('admin.manage-user.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,vendor,admin'],
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->status = 'active';
        $user->save();

        // Send email after user creation
        Mail::to($request->email)->send(new AccountCreatedMail($request->name, $request->email, $request->password));

        // If the user is a vendor or admin, create a vendor profile
        if (in_array($request->role, ['vendor', 'admin'])) {
            $vendor = new Vendor;
            $vendor->banner = '';
            $vendor->shop_name = $request->name.' Shop';
            $vendor->phone = '0702465814';
            $vendor->email = $request->email;
            $vendor->address = 'UIT';
            $vendor->description = 'no description';
            $vendor->user_id = $user->id;
            $vendor->status = 1;
            $vendor->save();
        }

        toastr('Created Successfully!', 'success');

        return redirect()->back();
    }
}
