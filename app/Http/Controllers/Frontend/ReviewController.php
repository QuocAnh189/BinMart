<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\Admin\UserProductReviewsDataTable;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use ImageUploadTrait;

    public function index(UserProductReviewsDataTable $dataTable) {}

    public function create(Request $request) {}
}
