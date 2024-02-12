<?php

namespace Database\Seeders;

use App\Models\Balance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Balance::create([
            'balance_id' => '001',
            'balance_type' => 'PROJECT',
        ]);
        Balance::create([
            'balance_id' => '001',
            'balance_type' => 'ACTIVITY',
        ]);
        Balance::create([
            'balance_id' => '002',
            'balance_type' => 'PROJECT',
        ]);
        Balance::create([
            'balance_id' => '002',
            'balance_type' => 'ACTIVITY',
        ]);
    }
}
