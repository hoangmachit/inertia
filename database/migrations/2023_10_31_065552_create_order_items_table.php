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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders', 'id');
            $table->foreignId('product_variant_id')->constrained('products', 'id');
            $table->foreignId('photo_id')->nullable()->constrained('files', 'id');
            $table->string('product_name')->nullable();
            $table->string('product_code')->nullable();
            $table->integer('regular_price')->default(0);
            $table->integer('sale_price')->default(0);
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
