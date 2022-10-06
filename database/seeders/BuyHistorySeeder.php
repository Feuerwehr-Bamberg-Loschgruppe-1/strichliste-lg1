<?php

namespace Database\Seeders;

use App\Models\BuyHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuyHistorySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuyHistory::factory()->create([
            'user_id' => rand(1, 11),
            'product_id' => rand(1, 11),
            'paid' => rand(0, 1),
        ]);

        BuyHistory::factory(10)->create();
    }
}
