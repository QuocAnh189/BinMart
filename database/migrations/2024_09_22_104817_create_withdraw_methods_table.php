<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->double('minimum_amount');
            $table->double('maximum_amount');
            $table->double('withdraw_charge');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('withdraw_methods');
    }
};
