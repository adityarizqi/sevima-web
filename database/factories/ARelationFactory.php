<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\ARelation>
 */
class ARelationFactory extends Factory
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
            'user_id' => User::where('type','user')->inRandomOrder()->first()->id,
        ];
    }
}
