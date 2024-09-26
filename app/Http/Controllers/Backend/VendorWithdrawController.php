<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\VendorWithdrawDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorWithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VendorWithdrawDataTable $dataTable) {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    public function showRequest(string $id) {}
}
