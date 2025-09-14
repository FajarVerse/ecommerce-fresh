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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->decimal('harga', 10,2)->nullable();
            $table->integer('stok')->nullable();
            $table->string('deskripsi');
            $table->string('image')->nullable();
            $table->foreignId('category_id')->constrained(table:'categories', indexName: 'product_category_id');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
