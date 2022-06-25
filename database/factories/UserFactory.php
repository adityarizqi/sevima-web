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
        $city = $this->faker->randomElement(['Jakarta', 'Bandung', 'Surabaya', 'Bali', 'Medan']);
        $province = $this->faker->randomElement(['Jawa Barat', 'Jawa Timur', 'Jawa Tengah', 'Jawa Timur', 'Jawa Timur']);
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
                'bio' => $this->faker->text(),
                'subject' => $this->faker->randomElement(['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Bahasa Inggris', 'Bahasa Indonesia']),
                'price' => $this->faker->randomElement(['Rp50.000 / Jam','Rp100.000 / Jam', 'Rp200.000 / Jam', 'Rp300.000 / Jam', 'Rp400.000 / Jam', 'Rp500.000 / Jam']),
                'is_available' => $this->faker->randomElement(['Tersedia', 'Sibuk', 'Tidak Tersedia']),
                'daily_active_clock' => $this->faker->randomElement(['07:00 - 10:00', '10:00 - 13:00', '13:00 - 16:00', '16:00 - 19:00', '19:00 - 22:00']) . ' ' .
                        $this->faker->randomElement(['WIB', 'WITA', 'WIT']),
                'phone_number' => $this->faker->phoneNumber(),
                'school_or_agency' => $this->faker->company(),
                'city' => $city,
                'province' => $province,
                'zip' => $this->faker->postcode(),
            ]),
            'key' => strtolower($city) . ' ' . strtolower($province)
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
