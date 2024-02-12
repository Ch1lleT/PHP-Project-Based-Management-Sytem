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
            'comment01' => 'ดูดีมาก',
        ]);
        Comments::create([
            'act_id' => '002',
            'comment04' => 'มีการพัฒนาที่ดีมากครับ',
        ]);
        Comments::create([
            'act_id' => '003',
            'comment06' => 'งานมีคุณภาพ',
        ]);
        Comments::create([
            'act_id' => '004',
            'comment01' => 'ดูดีมาก',
        ]);
        Comments::create([
            'act_id' => '005',
            'comment10' => 'ดูดีมาก',
        ]);
    }
}
