<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'device_name' => 'Iphone',
                'device_type' => 'iphone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Web',
                'device_type' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Ipab',
                'device_type' => 'ipad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('devices')->insert($data);
    }
}
