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
        Schema::create('product_cats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photo_id')->nullable()->constrained('files', 'id');
            $table->foreignId('product_list_id')->constrained('product_lists', 'id');
            $table->string('name_vi')->nullable();
            $table->string('name_en')->nullable();
            $table->string('desc_vi')->nullable();
            $table->string('desc_en')->nullable();
            $table->string('slug_vi')->nullable();
            $table->string('slug_en')->nullable();
            $table->text('content_vi')->nullable();
            $table->text('content_en')->nullable();
            $table->integer('sort')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_cats');
    }
};
