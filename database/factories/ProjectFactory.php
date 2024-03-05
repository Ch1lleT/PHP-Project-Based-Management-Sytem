<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\Plan;
use App\Models\Project;
use App\Models\User;
use App\Utilities\UUID;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Project::class;


    public function definition(): array
    {
        $plans = Plan::pluck('plan_id');
        $executives = User::where('role_id','4')->pluck('user_id');
        // $advisors = User::where('role_id','4');
        // $supervisors = User::where('role_id','4');
        // $supervisors = User::where('role_id','4');
        
        $project_type = ['OKR',"KPI"];
        $organizes = Organization::pluck('org_id');
        $users = User::pluck('user_id');

        return [
            'project_id' => UUID::uuid(Project::class),
            'project_name' => fake()->sentence() ,
            'plan_id' => $plans[mt_rand(0,count($plans)-1)],
            'executive' => $executives[mt_rand(0,count($executives)-1)],
            'advisor' => null ,
            'supervisor' => null,
            'project_head' => $users[mt_rand(0,count($users)-1)],
            'type' => $project_type[mt_rand(0,1)],
            'desc' => fake()->sentence(),
            'balance' => fake()->randomNumber(mt_rand(5,7)),
            'budget_source' => 'ไม่รู้',
            'budget_type' => 'เงินเก็บ',
            'org_id' => $organizes[mt_rand(0,count($organizes)-1)],
            'weight'=> fake()->randomFloat(1,0,1),
        ];
    }
}
