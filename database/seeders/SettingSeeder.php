<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'user_id' => '1',
            'setting_json' => '{}',
        ]);
        Setting::create([
            'user_id' => '2',
            'setting_json' => '{}',
        ]);
    }
}
