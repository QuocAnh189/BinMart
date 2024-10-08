<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer_socials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('icon');
            $table->string('name');
            $table->text('url');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footer_socials');
    }
};
