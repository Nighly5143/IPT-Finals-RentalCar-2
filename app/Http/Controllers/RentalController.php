<?php

namespace App\Http\Controllers;
use App\Models\Rental;
use App\Models\Customer;
use App\Models\Car;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        $rentals = Rental::orderBy('id')->get();
        return view('rentals.index', ['rentals' => $rentals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $customers = Customer::all();
    $cars = Car::all();
    return view('rentals.create', compact('customers', 'cars'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'customer_id' => 'required|exists:customers,id',
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'total_cost' => 'required|numeric|min:0',
        ]);

        Rental::create($validatedData);

        return redirect()->route('rentals.index')->with('success', 'Rental created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        $customers = Customer::all();
        $cars = Car::all();

        return view('rentals.edit', ['rental' => $rental, 'customers' => $customers, 'cars' => $cars]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
        $validatedData = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'customer_id' => 'required|exists:customers,id',
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'total_cost' => 'required|numeric|min:0',
        ]);

        $rental->update($validatedData);

        return redirect()->route('rentals.index')->with('success', 'Rental updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();

        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully');
    }
}
