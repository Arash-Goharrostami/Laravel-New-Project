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
        Schema::create('products', function (Blueprint $table) {
            // id
            $table->id("id");
            // string
            $table->string("sku"     )->nullable();
            $table->string("mpn"     )->nullable();
            $table->string("type"    )->nullable();
            $table->string("name"    )->nullable();
            $table->string("price"   )->nullable();
            $table->string('quantity')->nullable();
            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
