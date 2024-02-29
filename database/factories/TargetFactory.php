<?php

namespace Database\Factories;

use App\Models\Strategy;
use App\Models\Target;
use App\Utilities\UUID;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Target>
 */
class TargetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'target_id' => UUID::uuid(Target::class),
            'target_name' => fake()->sentence(),
            'stg_id' => Strategy::pluck('stg_id')[0],
        ];
    }
}
