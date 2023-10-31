<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 1,
                'photo_id' => null,
                'size_id' => 1,
                'color_id' => 2,
                'code' => 'CODE01',
                'regular_price' => 150000,
                'sale_price' => 120000,
                'discount' => 10,
                'sort' => 1,
                'status' => 1,
            ],
            [
                'product_id' => 1,
                'photo_id' => null,
                'size_id' => 1,
                'color_id' => 1,
                'code' => 'CODE02',
                'regular_price' => 170000,
                'sale_price' => 140000,
                'discount' => 5,
                'sort' => 2,
                'status' => 1,
            ],
            [
                'product_id' => 1,
                'photo_id' => null,
                'size_id' => 2,
                'color_id' => 1,
                'code' => 'CODE03',
                'regular_price' => 350000,
                'sale_price' => 340000,
                'discount' => 5,
                'sort' => 2,
                'status' => 1,
            ],
            [
                'product_id' => 1,
                'photo_id' => null,
                'size_id' => 2,
                'color_id' => 2,
                'code' => 'CODE04',
                'regular_price' => 999000,
                'sale_price' => 888000,
                'discount' => 5,
                'sort' => 2,
                'status' => 1,
            ],
            [
                'product_id' => 2,
                'photo_id' => null,
                'size_id' => 1,
                'color_id' => 1,
                'code' => 'CODE05',
                'regular_price' => 777000,
                'sale_price' => 555000,
                'discount' => 5,
                'sort' => 2,
                'status' => 1,
            ]
        ];
        DB::table('product_variants')->insert($data);
    }
}
