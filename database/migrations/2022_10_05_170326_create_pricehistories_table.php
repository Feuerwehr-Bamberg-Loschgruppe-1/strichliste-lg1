<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricehistories', function (Blueprint $table) {
            $table->id();
            $table->foreignID('product_id')->nullable(false)->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->decimal('sell_price_single_item');
            $table->integer('amount_per_box');
            $table->decimal('buy_price_per_box');
            $table->decimal('buy_price_single_item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricehistories');
    }
};
