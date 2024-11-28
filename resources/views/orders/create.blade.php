@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Create New Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="customer_email">Customer Email</label>
            <input type="email" name="customer_email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="customer_phone">Customer Phone</label>
            <input type="text" name="customer_phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="products">Select Products</label>
            <select name="products[]" class="form-control" multiple required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} (Stock: {{ $product->stock_quantity }})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantities">Quantities</label>
            <input type="text" name="quantities[]" class="form-control" placeholder="Enter quantities corresponding to selected products" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
</div>
@endsection
