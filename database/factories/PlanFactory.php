<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\Strategy;
use App\Utilities\UUID;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Plan::class;
    
    public function definition(): array
    {
        $plan_types = ['ผลผลิต','ผลลัพท์','ผลกระทบ'];
        return [
            'plan_id' => UUID::uuid(Plan::class),
            'plan_name' => fake()->sentence(),
            'stg_id' => Strategy::pluck('stg_id')[0],
            'type' => $plan_types[mt_rand(0,count($plan_types)-1)],
            'desc' => fake()->paragraph(),
            'weight' => fake()->randomFloat(1,0,1),
        ];
    }
}
