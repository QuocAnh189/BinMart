<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('flash_sale_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('product_id');
            $table->uuid('flash_sale_id');
            $table->boolean('show_at_home');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flash_sale_items');
    }
};
