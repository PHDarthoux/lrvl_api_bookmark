<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookmark>
 */
class BookmarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'link' => fake()->url(),
            'title' => fake()->sentence(3),
            'author' => fake()->name(),
            'picture_id' => fake()->numberBetween(1, 10),
            'movie_id' => fake()->numberBetween(1, 10),
        ];
    }
}
