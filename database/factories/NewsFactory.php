<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'admin_id' => User::where('type','admin')->inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['draft', 'publish']),
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(600, 350),
            'content' => $this->faker->text,
        ];
    }
}
