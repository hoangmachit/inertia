<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name_vi' => 'Đỏ',
                'name_en' => 'Red',
                'type' => 'product',
                'color' => '#ff0000',
                'sort' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_vi' => 'Xanh',
                'name_en' => 'Blue',
                'type' => 'product',
                'color' => '#ff0987',
                'sort' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_vi' => 'Đen',
                'name_en' => 'Black',
                'type' => 'product',
                'color' => '#000000',
                'sort' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_vi' => 'Đỏ nâu',
                'name_en' => 'Brown',
                'type' => 'product',
                'color' => '#363636',
                'sort' => 4,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('colors')->insert($data);
    }
}
