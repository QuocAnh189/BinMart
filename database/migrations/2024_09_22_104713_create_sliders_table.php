<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('banner')->nullable();
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('starting_price')->nullable();
            $table->string('btn_url')->nullable();
            $table->integer('serial')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
