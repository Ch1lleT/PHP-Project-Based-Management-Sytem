<?php

namespace Database\Seeders;

use App\Models\FiscalYear;
use App\Models\Strategy;
use App\Models\User;
use App\Models\Target;
use App\Models\Plan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BigDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // user
        User::factory()->randRole()->count(100)->create();
        
        $fiscal_years_id = FiscalYear::pluck('id');

        foreach ($fiscal_years_id as $id) {
            Strategy::factory()->count(10)->create([
                'year_code' => $id,
            ]);
        }

        $stg_id = Strategy::pluck('stg_id');
        
        foreach($stg_id as $id)
        {
            Target::factory()->count(mt_rand(3,9-1))->create([
                'stg_id' => $id,
            ]);
        
        }

        $target_id = Target::pluck('target_id');

        foreach($stg_id as $id)
        {
            Plan::factory()->count(mt_rand(3,6-1))->create([
                'stg_id' => $id,
                'target_id' => $target_id[mt_rand(3,count($target_id)-1)]
            ]);
        }

        
    }
}
