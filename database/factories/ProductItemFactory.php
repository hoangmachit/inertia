<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductItem>
 */
class ProductItemFactory extends Factory
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
            'photo_id' => null,
            'slug_vi' => str()->Slug($name),
            'slug_en' => str()->Slug($name),
            'name_vi' => $name,
            'name_en' => $name,
            'desc_vi' => fake()->text(100),
            'desc_en' => fake()->text(25),
            'content_vi' => fake()->text(100),
            'content_en' => fake()->text(100),
            'sort' => 1,
            'status' => 1,
            'type' => 'product',
        ];
    }
}
