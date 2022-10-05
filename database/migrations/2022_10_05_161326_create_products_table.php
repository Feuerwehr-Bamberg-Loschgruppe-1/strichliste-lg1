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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignID('productcategory_id')->nullable(false)->constrained('productcategories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->decimal('sell_price_single_item');
            $table->integer('amount_per_box');
            $table->decimal('buy_price_per_box');
            $table->decimal('buy_price_single_item');
            $table->boolean('is_alcohole');
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
        Schema::dropIfExists('products');
    }
};
