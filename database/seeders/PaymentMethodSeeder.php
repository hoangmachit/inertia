<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name_vi' => 'CASH',
                'name_en' => 'CASH',
                'desc_vi' => fake()->text(10),
                'desc_en' => fake()->text(10),
                'sort' => 1,
            ],
            [
                'name_vi' => 'COD',
                'name_en' => 'COD',
                'desc_vi' => fake()->text(10),
                'desc_en' => fake()->text(10),
                'sort' => 1,
            ],
            [
                'name_vi' => 'ATM',
                'name_en' => 'ATM',
                'desc_vi' => fake()->text(10),
                'desc_en' => fake()->text(10),
                'sort' => 1,
            ]
        ];
        DB::table('payment_methods')->insert($data);
    }
}
