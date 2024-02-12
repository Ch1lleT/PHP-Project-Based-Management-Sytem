<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OrganizationSeeder::class,
            SubOrganizationSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            HaveRoleSeeder::class,
            HaveSubOrgSeeder::class,
            SettingSeeder::class,
            StrategySeeder::class,
            PlanSeeder::class,
            ProjectSeeder::class,
            ActivitySeeder::class,
            CommentsSeeder::class,
            BalanceSeeder::class,
        ]);
    }
}
