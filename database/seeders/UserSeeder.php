<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'group_id' => '1',
            'first_name' => 'Alexander',
            'last_name' => 'Gropp',
            'name' => 'Alexander Gropp',
            'email' => 'alex.gropp@domain.tld',
            'password' => bcrypt(value:'password'),
        ]);

        User::factory(10)->create();
    }
}
