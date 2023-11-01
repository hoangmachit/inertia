<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            PaymentMethodSeeder::class,
            DeviceSeeder::class,
            SexSeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            WardSeeder::class,
            SizeSeeder::class,
            ColorSeeder::class,
            LanguageSeeder::class,
            SettingSeeder::class,
            RolePermissionSeeder::class,
        ]);
        \App\Models\Tags::factory()->count(20)->create();
        \App\Models\User::factory()->count(5)->create();
        \App\Models\Customer::factory()->count(25)->create();
        \App\Models\NewsList::factory()->count(5)->create();
        \App\Models\NewsCat::factory()->count(5)->create();
        \App\Models\NewsItem::factory()->count(5)->create();
        \App\Models\NewsSub::factory()->count(5)->create();
        \App\Models\News::factory()->count(10)->create();
        \App\Models\ProductBrand::factory()->count(5)->create();
        \App\Models\ProductList::factory()->count(5)->create();
        \App\Models\ProductCat::factory()->count(5)->create();
        \App\Models\ProductItem::factory()->count(5)->create();
        \App\Models\ProductSub::factory()->count(5)->create();
        \App\Models\Product::factory()->count(10)->create();
        \App\Models\Page::factory()->count(10)->create();
        $this->call([
            ProductVariantSeeder::class,
            ProductTagSeeder::class,
            NewsTagSeeder::class,
        ]);
    }
}
