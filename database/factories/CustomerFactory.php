<?php

namespace Database\Factories;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            // 'last_name' => fake()->lastname(),
            // 'first_name' => fake()->firstname(),
            // 'email' => fake()->unique()->safeEmail(),
            // 'phone' => fake()->phoneNumber(),
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'age' => $this->faker->numberBetween(18, 70),
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
