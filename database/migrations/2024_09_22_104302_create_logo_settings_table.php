<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('logo_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('logo');
            $table->text('favicon');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('logo_settings');
    }
};
