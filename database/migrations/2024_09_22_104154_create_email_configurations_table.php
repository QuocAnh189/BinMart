<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('email_configurations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email');
            $table->string('host');
            $table->string('username');
            $table->string('password');
            $table->string('port');
            $table->string('encryption');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('email_configurations');
    }
};
