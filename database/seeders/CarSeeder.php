<?php

namespace Database\Seeders;
use App\Models\Car;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'brand' => 'Toyota',
                'model' => 'Camry',
                'year' => 2022,
                'fuel_type' => 'Diesel',
                'mileage' => 1232,
                'rental_rate' => 1400.00,
            ],
            [
                'brand' => 'Honda',
                'model' => 'Accord',
                'year' => 2023,
                'fuel_type' => 'Gasoline',
                'mileage' => 1934,
                'rental_rate' => 553.00,
            ],
            [
                'brand' => 'Ford',
                'model' => 'Mustang',
                'year' => 2022,
                'fuel_type' => 'Gasoline',
                'mileage' => 9047,
                'rental_rate' => 2000.00,
            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Cruze',
                'year' => 2021,
                'fuel_type' => 'Diesel',
                'mileage' => 8293,
                'rental_rate' => 900.00,
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model S',
                'year' => 2023,
                'fuel_type' => 'Diesel',
                'mileage' => 1922,
                'rental_rate' => 2500.00,
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Altima',
                'year' => 2021,
                'fuel_type' => 'Gasoline',
                'mileage' => 9981,
                'rental_rate' => 1200.00,
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'E-Class',
                'year' => 2022,
                'fuel_type' => 'Diesel',
                'mileage' => 4429,
                'rental_rate' => 3000.00,
            ],
            [
                'brand' => 'BMW',
                'model' => 'X5',
                'year' => 2023,
                'fuel_type' => 'Gasoline',
                'mileage' => 9923,
                'rental_rate' => 2800.00,
            ],
            [
                'brand' => 'Audi',
                'model' => 'A4',
                'year' => 2021,
                'fuel_type' => 'Gasoline',
                'mileage' => 9994,
                'rental_rate' => 2200.00,
            ],
            [
                'brand' => 'Kia',
                'model' => 'Optima',
                'year' => 2022,
                'fuel_type' => 'Diesel',
                'mileage' => 1933,
                'rental_rate' => 1100.00,
            ],
            // Add more car data as needed
        ];

        foreach ($data as $carData) {
            Car::create($carData);
        }
    }
}
