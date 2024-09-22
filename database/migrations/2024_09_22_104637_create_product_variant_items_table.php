<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_variant_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('product_variant_id');
            $table->string('name');
            $table->double('price');
            $table->boolean('is_default');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_variant_items');
    }
};
