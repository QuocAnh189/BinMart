<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('order_id');
            $table->uuid('product_id');
            $table->uuid('vendor_id');
            $table->string('product_name');
            $table->text('variants');
            $table->integer('variant_total')->nullable();
            $table->string('unit_price');
            $table->integer('qty');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
