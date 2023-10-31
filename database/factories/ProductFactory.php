<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        return [
            'product_list_id' => null,
            'product_cat_id' => null,
            'product_item_id' => null,
            'product_sub_id' => null,
            'product_brand_id' => null,
            'photo_id' => NULL,
            'slug_vi' => str()->slug($name),
            'slug_en' => str()->slug($name),
            'name_vi' => $name,
            'name_en' => $name,
            'desc_vi' => fake()->text(25),
            'desc_en' => fake()->text(25),
            'content_vi' => fake()->text(100),
            'content_en' => fake()->text(100),
            'sort' => 1,
            'status' => 1,
            'type' => 'product',
            'view' => rand(1, 1000),
        ];
    }
}
