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
            $table->bigInteger('amount');
            $table->string('order_number');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('payment_method_id')->constrained();
            $table->foreignId('delivery_method_id')->constrained();
            $table->foreignId('address_id')->constrained();
            $table->enum('status',['pending', 'processing', 'completed', 'canceled'])->default('pending');
            $table->softDeletes();
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
