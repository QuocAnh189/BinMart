<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\BlogCommentDataTable;
use App\Http\Controllers\Controller;

class BlogCommentController extends Controller
{
    public function index(BlogCommentDataTable $dataTable) {}

    public function destroy(string $id) {}
}
