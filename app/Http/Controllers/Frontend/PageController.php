<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $about = About::first();

        return view('frontend.pages.about', compact('about'));
    }

    public function terms_and_condition() {}

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function handle_contact_form(Request $request) {}
}
