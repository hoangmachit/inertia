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
            $table->foreignId('photo_id')->nullable()->constrained('files', 'id');
            $table->foreignId('product_list_id')->nullable()->constrained('product_lists', 'id');
            $table->foreignId('product_cat_id')->nullable()->constrained('product_cats', 'id');
            $table->foreignId('product_item_id')->nullable()->constrained('product_items', 'id');
            $table->foreignId('product_sub_id')->nullable()->constrained('product_subs', 'id');
            $table->foreignId('product_brand_id')->nullable()->constrained('product_brands', 'id');
            $table->string('name_vi')->nullable();
            $table->string('name_en')->nullable();
            $table->string('desc_vi')->nullable();
            $table->string('desc_en')->nullable();
            $table->string('slug_vi')->nullable();
            $table->string('slug_en')->nullable();
            $table->longText('content_vi')->nullable();
            $table->longText('content_en')->nullable();
            $table->integer('sort')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->string('type')->nullable();
            $table->integer('view')->default(0);
            $table->timestamps();
            $table->softDeletes();
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
