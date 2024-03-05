<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Project;
use App\Utilities\UUID;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Activity::class;


    public function definition(): array
    {
        $activity_type = ['OKR',"KPI"];
        return [
            'act_id' => UUID::uuid(),
            'act_name' => fake()->sentence() ,
            'type' => $activity_type[mt_rand(0,1)],
            'project_id'=> '001' ,
            'desc' => fake()->paragraph(1), 
            'balance' => fake()->randomNumber(mt_rand(5,6)) + fake()->randomFloat(1,0,1),
            'weight' => fake()->randomFloat(1,0,1),
        ];
    }
}
