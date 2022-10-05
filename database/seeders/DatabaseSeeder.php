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
        \App\Models\Group::factory()->create([
            'name' => 'admin',
            'has_admin_rights' => TRUE,
            'is_able_to_login' => TRUE,
        ]);

        \App\Models\Group::factory()->create([
            'name' => 'user',
            'has_admin_rights' => FALSE,
            'is_able_to_login' => FALSE,
        ]);

        \App\Models\User::factory()->create([
            'group_id' => '1',
            'first_name' => 'Alexander',
            'last_name' => 'Gropp',
            'name' => 'Alexander Gropp',
            'email' => 'alex.gropp@domain.tld',
            'password' => bcrypt(value:'password'),
        ]);
        
        \App\Models\User::factory(10)->create();
    }
}
