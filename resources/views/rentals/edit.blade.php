@extends('base')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
<div class="modal fade" id="deleteRentalModal" tabindex="-1" aria-labelledby="deleteRentalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteRentalModalLabel">Delete Rental - {{ $rental->id }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Are you sure you want to delete this Rental?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete Rental</button>
                </div>
            </form>
        </div>
    </div>
</div>

<h1>Edit Rental</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{ route('rentals.update', $rental->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mt-2">
                <label for="customer_id">Customer</label>
                <select class="form-select" id="customer_id" name="customer_id" required>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" {{ $rental->customer_id == $customer->id ? 'selected' : '' }}>
                            {{ $customer->first_name }} {{ $customer->last_name }}
                        </option>
                    @endforeach
                </select>
                @error('customer_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="car_id">Car</label>
                <select class="form-select" id="car_id" name="car_id" required>
                    @foreach ($cars as $car)
                        <option value="{{ $car->id }}" {{ $rental->car_id == $car->id ? 'selected' : '' }}>
                            {{ $car->brand }} - {{ $car->model }}
                        </option>
                    @endforeach
                </select>
                @error('car_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="rental_date"> Rental Date </label>
                <input type="date" class="form-control" id="rental_date" name="rental_date" value="{{ $rental->rental_date }}" required>
                @error('rental_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="return_date"> Return Date </label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $rental->return_date }}" required>
                @error('return_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="total_cost"> Total Cost + Fees </label>
                <input type="number" class="form-control" id="total_cost" name="total_cost" value="{{ $rental->total_cost }}" required>
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRentalModal">
                    Delete Rental
                </button>
                <button type="submit" class="btn btn-primary">
                    Update Rental
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
