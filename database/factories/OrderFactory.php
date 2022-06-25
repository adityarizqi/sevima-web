<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::where('type','user')->inRandomOrder()->first()->id,
            'course_id' => Course::where('status','publish')->inRandomOrder()->first()->id,
            'payment_method' => $this->faker->randomElement(['bank_transfer', 'credit_card', 'paypal']),
            'payment_status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'payment_id' => 'INV-'.$this->faker->randomNumber(5, true),
            'payment_reference' => $this->faker->randomNumber(5, true),
            'payment_amount' => $this->faker->randomNumber(5,true)
        ];
    }
}
