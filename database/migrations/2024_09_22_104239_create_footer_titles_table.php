<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer_titles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('footer_grid_two_title')->nullable();
            $table->uuid('footer_grid_three_title')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footer_titles');
    }
};
