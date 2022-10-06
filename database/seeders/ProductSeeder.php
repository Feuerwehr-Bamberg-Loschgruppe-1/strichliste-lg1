<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Bier',
            'sell_price_single_item' => '1.30',
            'amount_per_box' => 20,
            'buy_price_per_box' => 15.50,
            'buy_price_single_item' => 15.50 / 20,
            'is_alcohole' => true,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Weizen',
            'sell_price_single_item' => '1.30',
            'amount_per_box' => 20,
            'buy_price_per_box' => 14,
            'buy_price_single_item' => 14 / 20,
            'is_alcohole' => true,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Radler',
            'sell_price_single_item' => '1.30',
            'amount_per_box' => 20,
            'buy_price_per_box' => 13,
            'buy_price_single_item' => 13 / 20,
            'is_alcohole' => true,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Alk. Frei',
            'sell_price_single_item' => '1.30',
            'amount_per_box' => 20,
            'buy_price_per_box' => 15.50,
            'buy_price_single_item' => 15.50 / 20,
            'is_alcohole' => true,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Wasser',
            'sell_price_single_item' => '1.00',
            'amount_per_box' => 12,
            'buy_price_per_box' => 5.20,
            'buy_price_single_item' => 5.2 / 12,
            'is_alcohole' => false,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Spezi',
            'sell_price_single_item' => '1.00',
            'amount_per_box' => 20,
            'buy_price_per_box' => 7.50,
            'buy_price_single_item' => 7.50 / 20,
            'is_alcohole' => false,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Limo',
            'sell_price_single_item' => '1.00',
            'amount_per_box' => 20,
            'buy_price_per_box' => 7.00,
            'buy_price_single_item' => 7.00 / 20,
            'is_alcohole' => false,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Apfel',
            'sell_price_single_item' => '1.00',
            'amount_per_box' => 20,
            'buy_price_per_box' => 10.00,
            'buy_price_single_item' => 10.00 / 20,
            'is_alcohole' => false,
        ]);

        Product::factory()->create([
            'category_id' => 1,
            'name' => 'Cola 0,33l',
            'sell_price_single_item' => '1.00',
            'amount_per_box' => 24,
            'buy_price_per_box' => 13.00,
            'buy_price_single_item' => 13.00 / 20,
            'is_alcohole' => false,
        ]);

        Product::factory()->create([
            'category_id' => 2,
            'name' => 'Brezeln',
            'sell_price_single_item' => '1.00',
            'amount_per_box' => 10,
            'buy_price_per_box' => 5.99,
            'buy_price_single_item' => 5.99 / 10,
            'is_alcohole' => false,
        ]);

        Product::factory()->create([
            'category_id' => 2,
            'name' => 'Nüsse',
            'sell_price_single_item' => '1.00',
            'amount_per_box' => 20,
            'buy_price_per_box' => 5.99,
            'buy_price_single_item' => 5.99 / 20,
            'is_alcohole' => false,
        ]);
    }
}
