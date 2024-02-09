<?php

namespace Database\Seeders;

use App\Models\Comments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comments::create([
            'act_id' => '001'
        ]);
        Comments::create([
            'act_id' => '002'
        ]);
        Comments::create([
            'act_id' => '003'
        ]);
        Comments::create([
            'act_id' => '004'
        ]);
        Comments::create([
            'act_id' => '005'
        ]);
    }
}
