<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'brand' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'year' => 'required|integer|min:1900',
        'fuel_type' => 'required|string|max:255',
        'mileage' => 'required|integer|min:10',
        'rental_rate' => 'required|numeric|min:0',
        // Add other validation rules as needed
    ]);

    // Create a new car using the validated data
    $car = Car::create($validatedData);

    // Redirect to the index page after creating the car
    return redirect()->route('cars.index')->with('success', 'Car created successfully');
}

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900',
            'fuel_type' => 'required|string|max:255',
            'mileage' => 'required|integer|min:10',
            'rental_rate' => 'required|numeric|min:0',
            // Add other validation rules as needed
        ]);

        $car->update($validatedData);

        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}
