<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\SliderDataTable;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(SliderDataTable $dataTable) {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}
}
