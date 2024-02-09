<?php

namespace Database\Seeders;

use App\Models\Request_Close_Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestCloseActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Request_Close_Activity::create([
            'req_id' => '0001',
            'act_id' => '001',
            'approvedby' => '01',
        ]);

        Request_Close_Activity::create([
            'req_id' => '0002',
            'act_id' => '002',
            'approvedby' => '01',
        ]);


    }
}
