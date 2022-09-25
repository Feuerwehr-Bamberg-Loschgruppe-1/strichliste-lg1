<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Alexander Gropp',
            'email' => 'alex.gropp@icloud.com',
            'password' => bcrypt(value:'password'),
        ]);

         \App\Models\User::factory(10)->create();    
    }
}
