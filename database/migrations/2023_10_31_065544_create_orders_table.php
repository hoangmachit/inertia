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
            $table->foreignId('status_id')->constrained('order_status', 'id');
            $table->foreignId('customer_id')->constrained('customers', 'id');
            $table->foreignId('payment_method_id')->constrained('payment_methods', 'id');
            $table->string('code')->unique();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('temp_price')->default(0);
            $table->integer('total_price')->default(0);
            $table->foreignId('city_id')->constrained('city', 'id');
            $table->foreignId('district_id')->constrained('districts', 'id');
            $table->foreignId('ward_id')->constrained('wards', 'id');
            $table->integer('ship_price')->default(0);
            $table->string('requirements')->nullable();
            $table->string('notes')->nullable();
            $table->integer('sort')->default(1);
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
