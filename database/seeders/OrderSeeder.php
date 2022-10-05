<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory()->create([
            'product_id' => rand(1, 11),
            'amount_of_boxes' => rand(1, 10),
            'total_buy_price_of_boxes' => rand(499, 2000)/100,
        ]);

        Order::factory(10)->create();
    }
}
