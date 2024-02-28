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
            'role_id' => '1',
            'role_name'=> 'Admin',
        ]);
        
        Role::create([
            'role_id' => '2',
            'role_name'=> 'Power user',
        ]);

        Role::create([
            'role_id' => '3',
            'role_name'=> 'Supervisor',
        ]);

        Role::create([
            'role_id' => '4',
            'role_name'=> 'Executive',
        ]);

        Role::create([
            'role_id' => '5',
            'role_name'=> 'User',
        ]);
    }
}
