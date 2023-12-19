@extends('base')

@section('content')
    <h1>Create Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="first_name" class="form-label">Fist Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age" required>
            @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text   " class="form-control" id="phone" name="phone" required>
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Add more form fields as needed -->

        <button type="submit" class="btn btn-primary">Create Customer</button>
    </form>
@endsection
