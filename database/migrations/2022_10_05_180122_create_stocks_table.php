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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignID('buyhistory_id')->constrained('buyhistories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignID('order_id')->constrained('orders')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignID('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('amount_in_stock');
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
        Schema::dropIfExists('stocks');
    }
};
