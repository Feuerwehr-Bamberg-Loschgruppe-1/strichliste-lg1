<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GroupSeeder::class,
            UserSeeder::class,
            ProductcategorySeeder::class,
            ProductSeeder::class,
            PricehistorySeeder::class,
            OrderSeeder::class,
            BuyhistorySeeder::class,
            StockSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
