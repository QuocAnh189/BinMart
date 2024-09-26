<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {}

    public function termsAndCondition() {}

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function handleContactForm(Request $request) {}
}
