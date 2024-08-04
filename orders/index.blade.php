@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Dish</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->dish->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>${{ $order->total_price }}</td>
                        <td>{{ $order->created_at->format('M d, Y H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $orders->links() }}
    </div>
@endsection
