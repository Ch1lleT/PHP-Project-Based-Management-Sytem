<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'plan_id' => '01',
            'plan_name' => 'Plan01',
            'stg_id' => '01',
            'target_id' => '1',
            'type' => 'Balance',
            'desc' => 'This is Balance plan for Plan 01',
            'weight' => 1.0,
            'is_active' => true,
        ]);
        Plan::create([
            'plan_id' => '02',
            'plan_name' => 'Plan02',
            'stg_id' => '01',
            'target_id' => '1',
            'type' => 'KPI',
            'desc' => 'This is Kpi for Plan 02',
            'weight' => 1.0,
            'is_active' => true,
        ]);
        Plan::create([
            'plan_id' => '03',
            'plan_name' => 'Plan03',
            'stg_id' => '02',
            'target_id' => '5',
            'type' => 'KPI',
        'desc' => 'This is KPI for Plan 03',
            'weight' => 1.0,
            'is_active' => true,
        ]);
        Plan::create([
            'plan_id' => '04',
            'plan_name' => 'Plan04',
            'stg_id' => '03',
            'target_id' => '6',
            'type' => 'KPI',
            'desc' => 'This is KPI for Plan 04',
            'weight' => 1.0,
            'is_active' => true,
        ]);
    }
}
