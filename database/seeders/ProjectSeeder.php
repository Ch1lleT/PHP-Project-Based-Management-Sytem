<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'project_id' => '001',
            'project_name' => 'ผลผลิตการพัฒนาระบบมาตรวิทยา (การเป็นหน่วยงานหลักในการเปรียบเทียบผลการวัดภายในประเทศ/การสนับสนุนกิจกรรมของชมรมมาตรวิทยาสาขาต่างๆ)6702201',
            'plan_id' => '01', 
            'executive' => null,
            'advisor'=> null,
            'supervisor' => null,
            'project_head' => "1",
            'type' => "None",
            'desc' => null,
            'budget_source' => 'มว',
            'budget_type' => 'งบลงทุน',
            'balance' => 0,
            'weight' => 1.0,
        ]);

        Project::create([
            'project_id' => '002',
            'project_name' => 'ผลผลิตการพัฒนาระบบมาตรวิทยา (การเป็นหน่วยงานหลักในการเปรียบเทียบผลการวัดภายในประเทศ/การสนับสนุนกิจกรรมของชมรมมาตรวิทยาสาขาต่างๆ)6702202',
            'plan_id' => '01', 
            'executive' => null,
            'advisor'=> null,
            'supervisor' => null,
            'project_head' => "1",
            'type' => "None",
            'desc' => null,
            'budget_source' => 'มว',
            'budget_type' => 'งบลงทุน',
            'balance' => 0,
            'weight' => 1.0,
        ]);

        Project::create([
            'project_id' => '003',
            'project_name' => 'ผลผลิตการพัฒนาระบบมาตรวิทยา (การเป็นหน่วยงานหลักในการเปรียบเทียบผลการวัดภายในประเทศ/การสนับสนุนกิจกรรมของชมรมมาตรวิทยาสาขาต่างๆ)6702203',
            'plan_id' => '02', 
            'executive' => null,
            'advisor'=> null,
            'supervisor' => null,
            'project_head' => "1",
            'type' => "None",
            'desc' => null,
            'budget_source' => 'มว',
            'budget_type' => 'งบลงทุน',
            'balance' => 0,
            'weight' => 1.0,
        ]);
    }
}
