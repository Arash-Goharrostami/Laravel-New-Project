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
            // id
            $table->id("id");
            // bigInteger
            $table->bigInteger("order_number"   )->unsigned()->nullable();
            $table->bigInteger("sum_of_price"   )->unsigned()->nullable();
            $table->bigInteger("sum_of_products")->unsigned()->nullable();
            // enum
            $table->enum('status', ['step_1', 'step_2', 'step_3', 'step_4', 'step_5']);
            // timestamps
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
