@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Your Cart</h1>
    @if(session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Dish Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>${{ $details['price'] }}</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>${{ $details['price'] * $details['quantity'] }}</td>
                        <td>
                            <a href="{{ route('update.cart', $id) }}" class="btn btn-info btn-sm">Update</a>
                            <a href="{{ route('remove.from.cart', $id) }}" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
