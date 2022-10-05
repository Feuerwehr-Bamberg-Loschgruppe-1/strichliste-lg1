<?php

namespace Database\Seeders;

use App\Models\Productcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductcategorySeeder extends Seeder
{
    use WithoutModelEvents;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productcategory::factory()->create([
            'name' => 'Trinken',
        ]);

        Productcategory::factory()->create([
            'name' => 'Essen',
        ]);
    }
}
