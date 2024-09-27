<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(Request $request)
    {
        if ($request->has('search')) {
            $blogs = Blog::with('category')->where('title', 'like', '%'.$request->search.'%')
                ->where('status', 1)->orderBy('id', 'DESC')
                ->paginate(12);
        } elseif ($request->has('category')) {
            $category = BlogCategory::where('slug', $request->category)
                ->where('status', 1)->firstOrFail();

            $blogs = Blog::with('category')->where('category_id', $category->id)
                ->where('status', 1)->orderBy('id', 'DESC')
                ->paginate(12);
        } else {
            $blogs = Blog::with('category')->where('status', 1)
                ->orderBy('id', 'DESC')
                ->paginate(12);
        }

        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blog_details(string $slug) {}

    public function comment(Request $request) {}
}
