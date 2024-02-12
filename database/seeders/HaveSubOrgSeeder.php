<?php

namespace Database\Seeders;

use App\Models\Have_Sub_Org;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaveSubOrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Have_Sub_Org::create([
            'user_id' => "1",
            'sub_org_id' => '001',
        ]);

        Have_Sub_Org::create([
            'user_id' => "2",
            'sub_org_id' => '003',
        ]);
    }
}
