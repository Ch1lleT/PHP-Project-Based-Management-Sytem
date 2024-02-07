<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Role::create([
            'role_id' => '01',
            'role_name'=> 'tester',
        ]);
        Role::create([
            'role_id' => '02',
            'role_name'=> 'tester2',
        ]);
    }
}
