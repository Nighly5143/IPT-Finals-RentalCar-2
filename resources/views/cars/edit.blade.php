@extends('base')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <div class="modal fade" id="deleteCarModal" tabindex="-1" aria-labelledby="deleteCarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteCarModalLabel">Delete Car - {{$car->model}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
            @csrf 
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this car?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete Car</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  
<h1>Edit Car</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{ route('cars.update', $car->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="form-group mt-2">
                <label for="brand"> Brand </label>
                <input type="text" name='brand' class='form-control' value='{{ $car->brand }}'>
                @error('brand')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="model"> Model </label>
                <input type="text" name='model' class='form-control' value='{{ $car->model }}'>
                @error('model')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="year"> Year </label>
                <input type="text" name='year' class='form-control' value='{{ $car->year }}'>
                @error('year')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="fuel_type"> Fuel Type </label>
                <input type="text" name='fuel_type' class='form-control' value='{{ $car->fuel_type }}'>
                @error('fuel_type')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="mileage"> Mileage </label>
                <input type="number" name='mileage' class='form-control' value='{{ $car->mileage }}'>
                @error('mileage')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="rental_rate"> Rental Rate </label>
                <input type="text" name='rental_rate' class='form-control' value='{{ $car->rental_rate }}'>
                @error('rental_rate')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCarModal">
                    Delete Car
                </button>
                <button type="submit" class="btn btn-primary">
                    Update Car
                </button>
            </div>
        </form>
    </div>
</div>
@endsection