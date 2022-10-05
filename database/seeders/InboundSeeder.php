<?php

namespace Database\Seeders;

use App\Models\Inbound;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InboundSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inbound::factory()->create([
            'user_id' => rand(1, 11),
            'sum_paid' => rand(1, 50),
            'credit' => rand(-20, 50),
        ]);

        Inbound::factory(10)->create();
    }
}
