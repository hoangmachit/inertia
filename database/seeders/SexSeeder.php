<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Female',
                'sort' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Male',
                'sort' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Other gender',
                'sort' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('sexes')->insert($data);
    }
}
