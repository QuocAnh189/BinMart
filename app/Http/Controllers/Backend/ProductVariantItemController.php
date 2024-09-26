<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductVariantItemController extends Controller
{
    public function index() {}

    public function create(string $productId, string $variantId) {}

    public function store(Request $request) {}

    public function edit(string $variantItemId) {}

    public function update(Request $request, string $variantItemId) {}

    public function destroy(string $variantItemId) {}

    public function changeStatus(Request $request) {}
}
