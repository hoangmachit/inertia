<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name_vi' => '36',
                'name_en' => '36',
                'type' => 'product',
                'sort' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_vi' => '37',
                'name_en' => '37',
                'type' => 'product',
                'sort' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_vi' => '38',
                'name_en' => '38',
                'type' => 'product',
                'sort' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_vi' => '39',
                'name_en' => '39',
                'type' => 'product',
                'sort' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_vi' => '40',
                'name_en' => '40',
                'type' => 'product',
                'sort' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('sizes')->insert($data);
    }
}
