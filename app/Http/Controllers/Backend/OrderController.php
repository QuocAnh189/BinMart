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

    public function pendingOrders() {}

    public function processedOrders() {}

    public function droppedOfOrders() {}

    public function shippedOrders() {}

    public function outForDeliveryOrders() {}

    public function deliveredOrders() {}

    public function canceledOrders() {}

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

    public function changeOrderStatus(Request $request) {}

    public function changePaymentStatus(Request $request) {}
}
