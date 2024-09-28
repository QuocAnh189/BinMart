<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Admin\NewsletterSubscriberDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    public function index(NewsletterSubscriberDataTable $dataTable) {}

    public function send_mail(Request $request) {}

    public function destroy(string $id) {}
}
