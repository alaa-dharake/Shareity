<!-- Example view to display order history -->
@extends('layouts.app') <!-- Assuming you have a layout defined -->

@section('content')
    <div class="container">
        <h1>Order History</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Dish Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Order Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->dish->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>${{ $order->total_price }}</td>
                        <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
