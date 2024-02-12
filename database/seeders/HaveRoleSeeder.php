<?php

namespace Database\Seeders;

use App\Models\Have_Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaveRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Have_Role::create([
            'user_id' => '1',
            'role_id' => '01',
        ]);
        Have_Role::create([
            'user_id' => '2',
            'role_id' => '02',
        ]);
    }
}
