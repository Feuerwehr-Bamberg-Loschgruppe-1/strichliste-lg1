<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'buyhistory_id' => rand(1, 11),
            'order_id' => rand(1, 11),
            'product_id' => rand(1, 11),
            'amount_in_stock' => rand(1, 100),
        ];
    }
}
