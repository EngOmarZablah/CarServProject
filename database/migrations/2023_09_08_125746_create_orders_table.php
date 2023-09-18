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
            $table->string('customer_name');
            $table->foreignId('customer_id')->constrained('users');
            $table->string('phone');
            $table->string('address');
            $table->string('car_id');
            $table->string('car_type');
            $table->string('service');
            $table->foreignId('employee_id')->constrained('users')->cascadeOnDelete();
            $table->tinyInteger('order_status');
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