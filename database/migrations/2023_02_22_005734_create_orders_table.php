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
            // string
            $table->string('sku'              )->nullable();
            $table->string('name'             )->nullable();
            $table->string('status'           )->nullable();
            $table->string("quantity"         )->nullable();
            $table->string("price_of_products")->nullable();
            $table->string("sum_of_products"  )->nullable();
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
