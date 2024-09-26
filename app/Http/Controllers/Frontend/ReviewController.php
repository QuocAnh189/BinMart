<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\Admin\UserProductReviewsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(UserProductReviewsDataTable $dataTable) {}

    public function create(Request $request) {}
}
