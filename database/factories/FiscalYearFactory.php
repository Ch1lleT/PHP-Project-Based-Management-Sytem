<?php

namespace Database\Factories;

use App\Models\FiscalYear;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FiscalYear>
 */
class FiscalYearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = FiscalYear::class;

    public function definition(): array
    {
        return [
            'year' => strval(Carbon::now()->year()),
        ];
    }
}
