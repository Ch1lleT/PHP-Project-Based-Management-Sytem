<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'act_id' => '001',         
            'act_name' => 'act_1', 
            'type' => "Type1",  
            'project_id' => "001", 
            'desc' => "This is act 01", 
            'balance' => 1000, 
            'weight' => 0.5, 
            'is_active' => true,
        ]);

        Activity::create([
            'act_id' => '002',         
            'act_name' => 'act_2', 
            'type' => "Type1",  
            'project_id' => "001", 
            'desc' => "This is act 02", 
            'balance' => 1000, 
            'weight' => 0.5, 
            'is_active' => true,
        ]);

        Activity::create([
            'act_id' => '003',         
            'act_name' => 'act_3', 
            'type' => "Type1",  
            'project_id' => "001", 
            'desc' => "This is act 03", 
            'balance' => 1000, 
            'weight' => 0.5, 
            'is_active' => true,
        ]);
        Activity::create([
            'act_id' => '004',         
            'act_name' => 'act_4', 
            'type' => "Type1",  
            'project_id' => "002", 
            'desc' => "This is act 04", 
            'balance' => 1000, 
            'weight' => 0.5, 
            'is_active' => true,
        ]);

        Activity::create([
            'act_id' => '005',         
            'act_name' => 'act_5', 
            'type' => "Type1",  
            'project_id' => "002", 
            'desc' => "This is act 05", 
            'balance' => 1000, 
            'weight' => 0.5, 
            'is_active' => true,
        ]);
    }
}
