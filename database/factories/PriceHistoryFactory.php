<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PriceHistory>
 */
class PriceHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => rand(1, 10),
            'sell_price_single_item' => rand(100, 200) / 100,
            'amount_per_box' => rand(1, 50),
            'buy_price_per_box' => rand(349, 2000) / 100,
            'buy_price_single_item' => rand(10, 200) / 100,
        ];
    }
}
