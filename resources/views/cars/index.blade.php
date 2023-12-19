@extends('base')

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<style>
    .card-title {
        margin-right: 10px; /* Adjust the value to add more or less space */
    }
    .card-body {
        display: flex;
    }

    .box1 {
        padding-right: 50px;
    }
</style>

<h1>Cars</h1>

<a href="{{ route('cars.create') }}" class="btn btn-primary me-md-2 btn btn-outline-info" type="button">Add Car</a>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($cars as $car)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="box1">
                        <h5 class="card-title">Brand:</h5>
                        <p class="card-text">Model:</p>
                        <p class="card-text">Year:</p>
                        <p class="card-text">Fuel Type:</p>
                        <p class="card-text">Mileage:</p>
                        <p class="card-text">Rental Rate:</p>
                    </div>
                    <div class="box2">
                        <h5 class="card-title">{{ $car->brand }}</h5>
                        <p class="card-text">{{ $car->model }}</p>
                        <p class="card-text">{{ $car->year }}</p>
                        <p class="card-text">{{ $car->fuel_type }}</p>
                        <p class="card-text">{{ $car->mileage }}</p>
                        <p class="card-text">{{ $car->rental_rate }}</p>
                    </div>
                </div>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-primary">
                        Edit
                    </a>
            </div>
        </div>
    @endforeach
</div>

@endsection
