<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'year', 'fuel_type', 'mileage', 'rental_rate'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public static function list()
{
    $cars = Car::orderByRaw('brand')->get();
    $list = [];

    foreach ($cars as $car) {
        $list[$car->id] = $car->brand;
    }

    return $list;
}
}
