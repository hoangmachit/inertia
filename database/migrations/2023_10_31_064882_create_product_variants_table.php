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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products', 'id');
            $table->foreignId('size_id')->nullable()->constrained('sizes', 'id');
            $table->foreignId('color_id')->nullable()->constrained('colors', 'id');
            $table->foreignId('photo_id')->nullable()->constrained('files', 'id');
            $table->string('code')->nullable();
            $table->integer('regular_price')->default(0);
            $table->integer('sale_price')->default(0);
            $table->float('discount')->default(0);
            $table->integer('sort')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
