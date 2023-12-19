@extends('base')

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif
    <h1>Rent A Car</h1>

    <a href="{{ route('rentals.create') }}" class="btn btn-primary me-md-2 btn btn-outline-info" type="button">Rent</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Car</th>
                <th>Rental Date</th>
                <th>Return Date</th>
                <th>Total Cost + Fees</th>
                <!-- Add more columns as needed -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentals as $rental)
                <tr>
                    <td>{{ $rental->id }}</td>
                    <td>{{ $rental->customer->last_name }}</td>
                    <td>{{ $rental->car->brand }}</td>
                    <td>{{ $rental->rental_date }}</td>
                    <td>{{ $rental->return_date }}</td>
                    <td>{{ $rental->total_cost }}</td>
                    <!-- Add more columns as needed -->
                    <td class="text-center">
                        <a href="{{ route('rentals.edit', $rental->id) }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
