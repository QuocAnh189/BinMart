<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_review_galleries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('product_review_id');
            $table->text('image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_review_galleries');
    }
};
