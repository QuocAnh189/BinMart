<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('site_name');
            $table->string('layout');
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('contact_address')->nullable();
            $table->text('map')->nullable();
            $table->string('currency_name');
            $table->string('currency_icon');
            $table->string('time_zone');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
