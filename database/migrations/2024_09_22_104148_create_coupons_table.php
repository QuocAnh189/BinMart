<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('code');
            $table->integer('quantity');
            $table->integer('max_use');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('discount_type');
            $table->double('discount');
            $table->boolean('status');
            $table->integer('total_used');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
