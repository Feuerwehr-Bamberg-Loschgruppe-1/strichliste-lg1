<?php

namespace Database\Seeders;

use App\Models\Buyhistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuyhistorySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buyhistory::factory()->create([
            'user_id' => rand(1, 11),
            'product_id' => rand(1, 11),
            'paid' => rand(0, 1),
        ]);

        Buyhistory::factory(10)->create();
    }
}
