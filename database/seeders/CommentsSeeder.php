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
            'act_id' => '001',
            'comment1' => 'ดูดีมาก',
        ]);
        Comments::create([
            'act_id' => '002',
            'comment4' => 'มีการพัฒนาที่ดีมากครับ',
        ]);
        Comments::create([
            'act_id' => '003',
            'comment6' => 'งานมีคุณภาพ',
        ]);
        Comments::create([
            'act_id' => '004',
            'comment1' => 'ดูดีมาก',
        ]);
        Comments::create([
            'act_id' => '005',
            'comment10' => 'ดูดีมาก',
        ]);
    }
}
