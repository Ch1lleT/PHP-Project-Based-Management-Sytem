<?php

namespace Database\Seeders;

use App\Models\Sub_Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sub_Organization::create([
            'sub_org_id' => '001',
            'main_org' => '001',
            'org_name' => 'suborg1',
        ]);

        Sub_Organization::create([
            'sub_org_id' => '002',
            'main_org' => '001',
            'org_name' => 'suborg2',
        ]);

        Sub_Organization::create([
            'sub_org_id' => '003',
            'main_org' => '002',
            'org_name' => 'suborg3',
        ]);

        Sub_Organization::create([
            'sub_org_id' => '004',
            'main_org' => '002',
            'org_name' => 'suborg4',
        ]);

        Sub_Organization::create([
            'sub_org_id' => '005',
            'main_org' => '003',
            'org_name' => 'suborg5',
        ]);
    }
}
