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
        Schema::create('supplier_tool', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreignId('tool_id')->references('id')->on('tools')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_tool');
    }
};
