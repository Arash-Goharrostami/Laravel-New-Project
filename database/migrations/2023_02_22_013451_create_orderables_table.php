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
        Schema::create('orderables', function (Blueprint $table) {
            // id
            $table->id();
            // string
            $table->string("quantity"  )->nullable();
            $table->string("order_id"  )->nullable();
            $table->string("product_id")->nullable();
            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderables');
    }
};
