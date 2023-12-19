@extends('base')

@section('content')
    <h1>Create Rental</h1>

    <form action="{{ route('rentals.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer Name</label>
            <select class="form-select" id="customer_id" name="customer_id" required>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->first_name }} {{ $customer->last_name }}</option>
                @endforeach
            </select>
            @error('customer_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="car_id" class="form-label">Car</label>
            <select class="form-select" id="car_id" name="car_id" required>
                @foreach ($cars as $car)
                    <option value="{{ $car->id }}">{{ $car->brand }} - {{ $car->model }}</option>
                @endforeach
            </select>
            @error('car_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rental_date" class="form-label">Rental Date</label>
            <input type="date" class="form-control" id="rental_date" name="rental_date" required>
            @error('rental_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="return_date" class="form-label">Return Date</label>
            <input type="date" class="form-control" id="return_date" name="return_date" required>
            @error('return_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="total_cost" class="form-label">Rental Rate + Fee</label>
            <input type="number" class="form-control" id="total_cost" name="total_cost" required>
            @error('total_cost')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Rent</button>
    </form>
@endsection
