<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'n_title' => fake()->sentence(),
            'n_author' => fake()->name(),
            'i_rating' => fake()->numberBetween(1, 5),
            'i_entry' => 1,
            'd_entry' => fake()->date()
        ];
    }
}
