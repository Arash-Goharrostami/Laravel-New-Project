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
            $table->bigInteger("price"   )->unsigned()->nullable();
            $table->bigInteger("numberOf")->unsigned()->nullable();
            // string
            $table->string("sku"        , 50)->nullable()->unique();
            $table->string("mpn"        , 50)->nullable()->unique();
            $table->string("type"       , 50)->nullable();
            $table->string("productName", 70);
            // enum
            $table->enum('quantity', ['PCS', 'PCK', 'CTN']);
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
