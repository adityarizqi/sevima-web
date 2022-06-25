<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'type' => $this->faker->randomElement(['author', 'user']),
            'image' => $this->faker->imageUrl(512, 512),
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'), // password
            'remember_token' => Str::random(10),
            'details' => json_encode([
                'birth_day' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('m-d-Y'),
                'gender' => $this->faker->randomElement(['Laki-Laki','Perempuan']),
                'address' => $this->faker->address(),
                'phone_number' => $this->faker->phoneNumber(),
                'school_or_agency' => $this->faker->company(),
                'city' => $this->faker->city(),
                'province' => $this->faker->city(),
                'zip' => $this->faker->postcode(),
            ])
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
