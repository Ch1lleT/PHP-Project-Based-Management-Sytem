<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::create([
            "user_id" => '1',
            // "email" => "test1@gmail.com",
            "prefix" => "นาย",
            "username" => "test1",
            "password" => Hash::make("test1"),
            "first_name" => "test1",
            "last_name" => "test1",
            // 'citizen_id' => '000000000',
            // 'position' => 'test',
            'gender' => 'ชาย',
            // 'birth_date' => Carbon::create(2003,03,20),
            'card_code' => '00001',
            // 'phone' => '0987776666',
            // 'address' => 'Bangkok',
            'role' => 'user',
            'is_active' => true,
        ]);
        User::create([
            "user_id" => '2',
            // "email" => "test2@gmail.com",
            "prefix" => "นาง",
            "username" => "test2",
            "password" => Hash::make("test2"),
            "first_name" => "test2",
            "last_name" => "test2",
            // 'citizen_id' => '000000000',
            // 'position' => 'test',
            'gender' => 'หญิง',
            // 'birth_date' =>  Carbon::create(2003,03,20),
            'card_code' => '00002',
            // 'phone' => '0967778888',
            // 'address' => 'Bangkok',
            'role' => 'admin',
            'is_active' => true,
        ]);
        User::create([
            "user_id" => '3',
            // "email" => "test2@gmail.com",
            "prefix" => "นาง",
            "username" => "user",
            "password" => Hash::make("user"),
            "first_name" => "user",
            "last_name" => "user",
            // 'citizen_id' => '000000000',
            // 'position' => 'test',
            'gender' => 'หญิง',
            // 'birth_date' =>  Carbon::create(2003,03,20),
            'card_code' => '00003',
            // 'phone' => '0967778888',
            // 'address' => 'Bangkok',
            'role' => 'user',
            'is_active' => true,
        ]);
        User::create([
            "user_id" => '4',
            // "email" => "test2@gmail.com",
            "prefix" => "นาย",
            "username" => "executive",
            "password" => Hash::make("executive"),
            "first_name" => "executive",
            "last_name" => "executive",
            // 'citizen_id' => '000000000',
            // 'position' => 'test',
            'gender' => 'ชาย',
            // 'birth_date' =>  Carbon::create(2003,03,20),
            'card_code' => '00004',
            // 'phone' => '0967778888',
            // 'address' => 'Bangkok',
            'role' => 'executive',
            'is_active' => true,
        ]);
        User::create([
            "user_id" => '5',
            // "email" => "test2@gmail.com",
            "prefix" => "นาย",
            "username" => "supervisor",
            "password" => Hash::make("supervisor"),
            "first_name" => "supervisor",
            "last_name" => "supervisor",
            // 'citizen_id' => '000000000',
            // 'position' => 'test',
            'gender' => 'ชาย',
            // 'birth_date' =>  Carbon::create(2003,03,20),
            'card_code' => '00005',
            // 'phone' => '0967778888',
            // 'address' => 'Bangkok',
            'role' => 'supervisor',
            'is_active' => true,
        ]);
        User::create([
            "user_id" => '6',
            // "email" => "test2@gmail.com",
            "prefix" => "นาย",
            "username" => "powerUser",
            "password" => Hash::make("powerUser"),
            "first_name" => "powerUser",
            "last_name" => "powerUser",
            // 'citizen_id' => '000000000',
            // 'position' => 'test',
            'gender' => 'ชาย',
            // 'birth_date' =>  Carbon::create(2003,03,20),
            'card_code' => '00006',
            // 'phone' => '0967778888',
            // 'address' => 'Bangkok',
            'role' => 'powerUser',
            'is_active' => true,
        ]);

        User::factory()->admin()->count(2)->create();
    }
}
