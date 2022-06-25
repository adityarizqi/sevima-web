<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => User::where('type','author')->inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['draft', 'publish']),
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(600, 400),
            'slug' => $this->faker->slug,
            'content' => $this->faker->text,
        ];
    }
}
