<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("settings")->insert([
            'language_id' => 1,
            'name_vi' => "Thiết kế website Hoàng Anh",
            'name_en' => "Thiet ke website Hoang Anh",
            'head_js' => "head_js",
            'body_js' => "body_hs",
            'google_master_tool' => "google_master_tool",
            'google_analytics' => "google_analytics",
        ]);
    }
}
