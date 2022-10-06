<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()->create([
            'name' => 'admin',
            'has_admin_rights' => true,
            'is_able_to_login' => true,
        ]);

        Group::factory()->create([
            'name' => 'user',
            'has_admin_rights' => false,
            'is_able_to_login' => false,
        ]);
    }
}
