<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\Admin\UserProductReviewsDataTable;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use ImageUploadTrait;

    public function review_list(UserProductReviewsDataTable $dataTable) {}

    public function create_review(Request $request) {}
}
