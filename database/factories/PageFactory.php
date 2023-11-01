<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->name();
        $arrayType = [
            'about',
            'blog',
        ];
        return [
            'photo_id' => null,
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
            'type' => $arrayType[rand(0, 1)],
            'view' => rand(1, 1000),
        ];
    }
}
