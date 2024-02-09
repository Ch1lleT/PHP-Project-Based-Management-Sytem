<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::create([
            'org_id' => '001',
            'org_name' => 'org1'
        ]);
        Organization::create([
            'org_id' => '002',
            'org_name' => 'org2'
        ]);
        Organization::create([
            'org_id' => '003',
            'org_name' => 'org3'
        ]);
    }
}
