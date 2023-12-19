<?php

namespace Database\Factories;
use App\Models\Rental;
use App\Models\Car;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $rentalDate = $this->faker->dateTimeBetween('-1 month', '+1 month');


        return [
            'car_id' => $this->faker->randomElement(Car::pluck('id')),
            'customer_id' => $this->faker->randomElement(Customer::pluck('id')),
            'rental_date' => $rentalDate,
            'return_date' => fake()->dateTimeInInterval($rentalDate, '+7 days'),
            'total_cost' => fake()->randomFloat(2, 50, 500),
        ];
    }
}
