<?php

use App\Models\WithdrawRequest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('withdraw_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('vendor_id')->constrained();
            $table->string('method');
            $table->double('total_amount');
            $table->double('withdraw_amount');
            $table->double('withdraw_charge');
            $table->text('account_info');
            $table->enum('status', WithdrawRequest::$status);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('withdraw_requests');
    }
};
