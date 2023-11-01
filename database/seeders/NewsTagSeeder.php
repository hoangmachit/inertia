<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'news_id' => 1,
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 1,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 1,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 2,
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'news_id' => 2,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('news_tags')->insert($data);
    }
}
