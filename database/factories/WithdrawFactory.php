<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Withdraw>
 */
class WithdrawFactory extends Factory
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
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'amount' => $this->faker->randomNumber(6,true),
            'payment_id' => 'WD-'.$this->faker->randomNumber(5, true)
        ];
    }
}
