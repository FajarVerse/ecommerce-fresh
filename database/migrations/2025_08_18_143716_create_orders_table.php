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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique()->nullable();
            $table->enum('status', ['pending', 'completed', 'canceled'])->default('pending');
            $table->decimal('total', 10, 2)->nullable();
            $table->foreignId('user_id')->constrained(table:'users', indexName:'order_user_id');
            $table->foreignId('product_id')->constrained(table:'products', indexName:'order_product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
