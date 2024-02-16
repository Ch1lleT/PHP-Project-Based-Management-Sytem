<?php

namespace Database\Seeders;

use App\Models\Target;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Target::create([
            'target_id' => '1',
            'target_name'=> 'Target 1',
            'stg_id' => '01',
        ]);
        Target::create([
            'target_id' => '2',
            'target_name'=> 'Target 2',
            'stg_id' => '01',
        ]);
        Target::create([
            'target_id' => '3',
            'target_name'=> 'Target 3',
            'stg_id' => '01',
        ]);
        Target::create([
            'target_id' => '4',
            'target_name'=> 'Target 4',
            'stg_id' => '01',
        ]);
        Target::create([
            'target_id' => '5',
            'target_name'=> 'Target 5',
            'stg_id' => '02',
        ]);
        Target::create([
            'target_id' => '6',
            'target_name'=> 'Target 6',
            'stg_id' => '02',
        ]);
        Target::create([
            'target_id' => '7',
            'target_name'=> 'Target 7',
            'stg_id' => '02',
        ]);
        Target::create([
            'target_id' => '8',
            'target_name'=> 'Target 8',
            'stg_id' => '02',
        ]);
    }
}
