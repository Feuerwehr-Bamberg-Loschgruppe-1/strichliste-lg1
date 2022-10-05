<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()->create([
            'name' => 'admin',
            'has_admin_rights' => TRUE,
            'is_able_to_login' => TRUE,
        ]);

        Group::factory()->create([
            'name' => 'user',
            'has_admin_rights' => FALSE,
            'is_able_to_login' => FALSE,
        ]);
    }
}
