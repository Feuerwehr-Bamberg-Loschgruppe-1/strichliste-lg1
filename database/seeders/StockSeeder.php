<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::factory()->create([
            'buy_history_id' => rand(1, 11),
            'order_id' => rand(1, 11),
            'product_id' => rand(1, 11),
            'amount_in_stock' => rand(1, 100),
        ]);

        Stock::factory(10)->create();
    }
}
