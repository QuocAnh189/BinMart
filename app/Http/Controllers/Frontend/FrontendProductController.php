<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    public function product_list(Request $request)
    {
        $query = Product::withAvg('reviews', 'rating')
            ->withCount('reviews')
            ->with(['variants', 'category', 'productImageGalleries'])
            ->where(['status' => 1, 'is_approved' => 1]);

        if ($request->has('category')) {
            $category = Category::where('slug', $request->category)->firstOrFail();
            $query->where('category_id', $category->id);
        } elseif ($request->has('subcategory')) {
            $category = SubCategory::where('slug', $request->subcategory)->firstOrFail();
            $query->where('sub_category_id', $category->id);
        } elseif ($request->has('childcategory')) {
            $category = ChildCategory::where('slug', $request->childcategory)->firstOrFail();
            $query->where('child_category_id', $category->id);
        } elseif ($request->has('brand')) {
            $brand = Brand::where('slug', $request->brand)->firstOrFail();
            $query->where('brand_id', $brand->id);
        }

        $query->when($request->has('range'), function ($q) use ($request) {
            $price = explode(';', $request->range);
            $from = $price[0];
            $to = $price[1];

            return $q->whereBetween('price', [$from, $to]);
        });

        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%'.$request->search.'%')
                    ->orWhere('long_description', 'like', '%'.$request->search.'%')
                    ->orWhereHas('category', function ($q) use ($request) {
                        $q->where('name', 'like', '%'.$request->search.'%')
                            ->orWhere('long_description', 'like', '%'.$request->search.'%');
                    });
            });
        }

        $products = $query->orderBy('id', 'DESC')->paginate(12);

        $categories = Category::where(['status' => 1])->get();
        $brands = Brand::where(['status' => 1])->get();
        $productpage_banner_section = Advertisement::where('key', 'productpage_banner_section')->first();
        $productpage_banner_section = json_decode($productpage_banner_section?->value);

        return view('frontend.pages.product', compact('products', 'categories', 'brands', 'productpage_banner_section'));
    }

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
