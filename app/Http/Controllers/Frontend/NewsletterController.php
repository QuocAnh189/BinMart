<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newsLetter_request(Request $request) {}

    public function newsLetter_email_verify($token) {}
}
