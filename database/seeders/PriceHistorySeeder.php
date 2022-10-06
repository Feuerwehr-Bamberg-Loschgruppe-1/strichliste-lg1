<?php

namespace Database\Seeders;

use App\Models\PriceHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceHistorySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PriceHistory::factory()->create([
            'product_id' => 1,
            'sell_price_single_item' => 1.30,
            'amount_per_box' => 20,
            'buy_price_per_box' => 17.00,
            'buy_price_single_item' => 17.00 / 20,
        ]);

        PriceHistory::factory(10)->create();
    }
}
