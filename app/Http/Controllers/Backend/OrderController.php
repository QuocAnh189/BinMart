<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\OrderDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrderDataTable $dataTable) {}

    public function pending_orders() {}

    public function processed_orders() {}

    public function dropped_of_orders() {}

    public function shipped_orders() {}

    public function out_for_delivery_orders() {}

    public function delivered_orders() {}

    public function canceled_orders() {}

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}

    public function change_order_status(Request $request) {}

    public function change_payment_status(Request $request) {}
}
