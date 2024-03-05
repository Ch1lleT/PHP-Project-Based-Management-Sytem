<?php

namespace Database\Seeders;

use App\Models\FiscalYear;
use App\Models\Strategy;
use App\Models\User;
use App\Models\Target;
use App\Models\Plan;
use App\Models\Project;
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


        foreach($stg_id as $id)
        {
            $target_id = Target::where('stg_id',$id)->pluck('target_id');
            foreach($target_id as $target)
            {

                Plan::factory()->count(mt_rand(3,6-1))->create([
                    'stg_id' => $id,
                    'target_id' => $target
                ]);
            }
        }
        $plans = Plan::pluck('plan_id');
        foreach($plans as $plan)
        {
            Project::factory()->count(mt_rand(2,10))->create([
                'plan_id' => $plans[mt_rand(0,count($plans)-1)]
            ]);
        }

        
    }
}
