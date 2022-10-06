<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => rand(1, 11),
            'amount_of_boxes' => rand(1, 10),
            'total_buy_price_of_boxes' => rand(499, 20000) / 100,
        ];
    }
}
