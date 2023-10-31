<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            SexSeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            WardSeeder::class,
            SizeSeeder::class,
            ColorSeeder::class,
            LanguageSeeder::class,
            RolePermissionSeeder::class,
        ]);
        \App\Models\Customer::factory()->count(25)->create();
    }
}
