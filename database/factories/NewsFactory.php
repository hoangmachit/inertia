<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
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
            'news_list_id' => null,
            'news_cat_id' => null,
            'news_sub_id' => null,
            'news_item_id' => null,
            'photo_id' => null,
            'slug_vi' => str()->slug($name),
            'slug_en' => str()->slug($name),
            'name_vi' => $name,
            'name_en' => $name,
            'desc_vi' => fake()->text(25),
            'desc_en' => fake()->text(25),
            'content_vi' => fake()->text(100),
            'content_en' => fake()->text(1005),
            'sort' => 1,
            'status' => 1,
            'type' => 'blog',
            'view' => rand(1, 1000),
        ];
    }
}
