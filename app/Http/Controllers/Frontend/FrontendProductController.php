<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    public function product_list(Request $request) {}

    public function show_product_detail(string $slug)
    {
        $product = Product::with(['vendor', 'category', 'productImageGalleries', 'variants', 'brand'])
            ->where('slug', $slug)->where('status', 1)
            ->first();
        $reviews = ProductReview::where('product_id', $product->id)->where('status', 1)->paginate(10);

        return view('frontend.pages.product-detail', compact('product', 'reviews'));
    }

    public function change_list_view(Request $request) {}
}
