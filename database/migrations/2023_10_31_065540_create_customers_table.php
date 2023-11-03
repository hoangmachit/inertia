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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles', 'id');
            $table->foreignId('avatar_id')->nullable()->constrained('files', 'id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('full_name')->nullable();
            $table->string('email')->unique();;
            $table->string('phone')->unique();
            $table->foreignId('sex_id')->constrained('sexes', 'id');
            $table->string('address')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('birth_day')->nullable();
            $table->integer('sort')->default(1);
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
