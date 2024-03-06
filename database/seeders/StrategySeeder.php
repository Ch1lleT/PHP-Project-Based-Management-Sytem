<?php

namespace Database\Seeders;

use App\Models\Strategy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Strategy::create([
            'stg_id' => '01',
            'name' => 'Strategy No.1',
            'desc' => 'This is Strategy No.1',
            'year_code' => 4,
            'is_active' => true,
        ]);
        Strategy::create([
            'stg_id' => '02',
            'name' => 'Strategy No.2',
            'desc' => 'This is Strategy No.2',
            'year_code' => 4,
            'is_active' => true,
        ]);
        Strategy::create([
            'stg_id' => '03',
            'name' => 'Strategy No.3',
            'desc' => 'This is Strategy No.3',
            'year_code' => 4,
            'is_active' => true,
        ]);
    }
}
