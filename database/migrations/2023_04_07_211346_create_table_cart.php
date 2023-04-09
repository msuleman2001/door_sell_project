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
        Schema::create('cart', function (Blueprint $table) {
            $table->id('cart_id');
            $table->timestamps();
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('user_id');
            $table->json('product_adons_json');
            $table->string('cart_details');
            $table->integer('created_by_id');
            $table->integer('updated_by_id');
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cart');
    }
};
