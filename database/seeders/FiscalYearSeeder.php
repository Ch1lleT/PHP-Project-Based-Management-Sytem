<?php

namespace Database\Seeders;

use App\Models\FiscalYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class FiscalYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FiscalYear::factory()->count(4)->state(new Sequence(
            ['year'=> '2021'],
            ['year'=> '2022'],
            ['year'=> '2023'],
            ['year'=> '2024'],
        ))->create();
    }
}
