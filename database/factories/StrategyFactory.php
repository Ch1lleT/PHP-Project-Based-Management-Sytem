<?php

namespace Database\Factories;

use App\Models\Strategy;
use App\Utilities\UUID;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Strategy>
 */
class StrategyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Strategy::class;


    public function definition(): array
    {
        return [
            'stg_id' => UUID::uuid(Strategy::class),
            'name'=> fake()->sentence(),
            'desc' => fake()->text(),
            'year_code'=> 1,
        ];
    }
}
