<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'language_name' => 'Tiếng Việt',
                'language_type' => 'vi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'language_name' => 'Tiếng Anh',
                'language_type' => 'en',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('languages')->insert($data);
    }
}
