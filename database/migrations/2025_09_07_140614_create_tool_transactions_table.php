<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tool_transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreignId('tool_id')->references('id')->on('tools')->onDelete('cascade');
            $table->foreignId('station_id')->references('id')->on('stations')->onDelete('cascade');
            $table->foreignId('operator_id')->references('id')->on('operators')->onDelete('cascade');
            $table->integer('count')->default(1);
            $table->dateTime('transaction_date_time')->useCurrent();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tool_transaction');
    }
};
