<?php

namespace Database\Seeders;

use App\Models\Credit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreditSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Credit::factory()->create([
            'user_id' => rand(1, 11),
            'credit' => rand(1, 50),
        ]);

        Credit::factory(10)->create();
    }
}
