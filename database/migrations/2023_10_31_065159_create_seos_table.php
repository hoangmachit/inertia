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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable();
            $table->string('type')->nullable();
            $table->string('table_name')->nullable();
            $table->string('title_vi')->nullable();
            $table->string('title_en')->nullable();
            $table->string('keyword_vi')->nullable();
            $table->string('keyword_en')->nullable();
            $table->string('description_vi')->nullable();
            $table->string('description_en')->nullable();
            $table->string('schema_vi')->nullable();
            $table->string('schema_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
