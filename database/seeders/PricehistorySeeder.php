<?php

namespace Database\Seeders;

use App\Models\Pricehistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricehistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pricehistory::factory()->create([
            'product_id' => 1,
            'sell_price_single_item' => 1.30,
            'amount_per_box' => 20,
            'buy_price_per_box' => 17.00,
            'buy_price_single_item' => 17.00/20,
        ]);
    }
}
