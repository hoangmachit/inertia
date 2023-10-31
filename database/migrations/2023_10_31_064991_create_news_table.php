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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photo_id')->nullable()->constrained('files', 'id');
            $table->foreignId('news_list_id')->constrained('news_lists', 'id');
            $table->foreignId('news_cat_id')->constrained('news_cats', 'id');
            $table->foreignId('news_item_id')->constrained('news_items', 'id');
            $table->foreignId('news_sub_id')->constrained('news_subs', 'id');
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
