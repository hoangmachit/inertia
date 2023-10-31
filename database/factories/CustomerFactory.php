<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->unique()->userName(),
            'password' => bcrypt('admin#123'),
            'avatar_id' => null,
            'full_name' => fake()->name(),
            'email' => fake()->unique()->email(),
            'phone' => fake()->unique()->phoneNumber(),
            'sex_id' => rand(1, 3),
            'address' => fake()->address(),
            'remember_token' => null,
            'status' => 1,
            'role_id' => rand(1, 3),
            'birth_day' => now(),
            'email_verified_at' => null,
            'sort' => 1,
        ];
    }
}
