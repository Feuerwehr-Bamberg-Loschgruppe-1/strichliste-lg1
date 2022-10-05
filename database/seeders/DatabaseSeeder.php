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

        \App\Models\User::factory()->create([
            'name' => 'Alexander Gropp',
            'email' => 'alex.gropp@domain.tld',
            'password' => bcrypt(value:'password'),
            'groups_id' => '0',
        ]);

        \App\Models\User::factory(10)->create();
    }
}
