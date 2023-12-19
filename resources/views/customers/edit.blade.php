@extends('base')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <div class="modal fade" id="deleteCustomerrModal" tabindex="-1" aria-labelledby="deleteCustomerrModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteCustomerrModalLabel">Delete Customer - {{$customer->first_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
            @csrf 
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this customer?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete Customer</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  
<h1>Edit Customers</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="form-group mt-2">
                <label for="last_name"> Last Name </label>
                <input type="text" name='last_name' class='form-control' value='{{ $customer->last_name }}'>
                @error('last_name')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="first_name"> First Name </label>
                <input type="text" name='first_name' class='form-control' value='{{ $customer->first_name }}'>
                @error('first_name')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="age"> Age </label>
                <input type="number" name='age' class='form-control' value='{{ $customer->age }}'>
                @error('age')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="address"> Address </label>
                <input type="text" name='address' class='form-control' value='{{ $customer->address }}'>
                @error('address')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="email"> Email </label>
                <input type="text" name='email' class='form-control' value='{{ $customer->email }}'>
                @error('email')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="phone"> Phone </label>
                <input type="text" name='phone' class='form-control' value='{{ $customer->phone }}'>
                @error('phone')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCustomerrModal">
                    Delete Customer
                </button>
                <button type="submit" class="btn btn-primary">
                    Update Customer
                </button>
            </div>
        </form>
    </div>
</div>
@endsection