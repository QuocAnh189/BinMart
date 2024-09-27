<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use ImageUploadTrait;

    public function index(BlogDataTable $dataTable) {}

    public function create() {}

    public function store(Request $request) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}

    public function changeStatus(Request $request) {}
}
