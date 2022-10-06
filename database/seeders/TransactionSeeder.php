<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::factory()->create([
            'user_id' => rand(1, 11),
            'sum_paid' => rand(1, 50),
        ]);

        Transaction::factory(10)->create();
    }
}
