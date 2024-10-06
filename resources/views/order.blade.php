@extends('layouts.app') <!-- Use your layout file -->

@section('content')
    <div class="order-section">
        <h2>Place Your Order</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('order.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="order_details">Order Details</label>
                <textarea id="order_details" name="order_details" required></textarea>
            </div>
            <button type="submit">Place Order</button>
        </form>
    </div>
@endsection
