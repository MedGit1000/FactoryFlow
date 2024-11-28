{{-- @extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Inventory Management</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <a href="{{ route('inventory.create') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus"></i> Add New Product
                    </a>
                    <h3 class="card-title">Product List</h3>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('inventory.index') }}" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search products..." value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered table-hover">
                        <!-- Table content -->
                    </table>
                    {{ $products->links() }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Stock Quantity</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->stock_quantity }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('inventory.edit', $product) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('inventory.destroy', $product) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No products found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="mb-0">Inventory Management</h1>
                    <a href="{{ route('inventory.create') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-plus-circle me-2"></i>Add New Product
                    </a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header bg-white py-3">
                        <form method="GET" action="{{ route('inventory.index') }}" class="d-flex">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search products..."
                                    value="{{ request('search') }}">
                                <button class="btn btn-outline-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Value</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr class="alert" role="alert">
                                        <td>
                                            <label class="checkbox-wrap checkbox-primary">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="img"
                                                style="background-image: url('{{ $product->image ? Storage::url($product->image) : asset('default-product.png') }}');
                                         width: 80px;
                                         height: 80px;
                                         background-size: cover;
                                         background-position: center;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-details">
                                                <span class="d-block">{{ $product->name }}</span>
                                                <small
                                                    class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                            </div>
                                        </td>
                                        <td>${{ number_format($product->price, 2) }}</td>
                                        <td class="quantity">
                                            <div class="input-group">
                                                <input type="number" name="quantity"
                                                    class="quantity form-control input-number"
                                                    value="{{ $product->stock_quantity }}" min="0" max="1000">
                                            </div>
                                        </td>
                                        <td>${{ number_format($product->price * $product->stock_quantity, 2) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('inventory.edit', $product) }}"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('inventory.destroy', $product) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <p class="text-muted">No products found</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .checkbox-wrap {
            position: relative;
            display: block;
            cursor: pointer;
        }

        .checkbox-wrap input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border-radius: 3px;
        }

        .checkbox-wrap:hover input~.checkmark {
            background-color: #ccc;
        }

        .checkbox-wrap input:checked~.checkmark {
            background-color: #2196F3;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .checkbox-wrap input:checked~.checkmark:after {
            display: block;
        }

        .checkbox-wrap .checkmark:after {
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }
    </style>
@endsection --}}
@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="mb-0">Stock</h1>

                    <a href="{{ route('inventory.create') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-plus-circle me-2"></i>Add New Product
                    </a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header bg-white py-3">
                        <form method="GET" action="{{ route('inventory.index') }}" class="d-flex">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control"
                                    placeholder="Search by name, description, or category..."
                                    value="{{ request('search') }}">

                                <select name="stock_status" class="form-select" style="max-width: 150px;">
                                    <option value="">All Stock</option>
                                    <option value="in_stock" {{ request('stock_status') == 'in_stock' ? 'selected' : '' }}>
                                        In Stock
                                    </option>
                                    <option value="out_of_stock"
                                        {{ request('stock_status') == 'out_of_stock' ? 'selected' : '' }}>
                                        Out of Stock
                                    </option>
                                </select>

                                <button class="btn btn-outline-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>

                                @if (request('search') || request('stock_status'))
                                    <a href="{{ route('inventory.index') }}" class="btn btn-outline-secondary">
                                        <i class="fas fa-times"></i>
                                    </a>
                                @endif
                            </div>

                        </form>
                    </div>
                    @if (request('search') || request('stock_status'))
                        <div class="card-header bg-light py-2">
                            <small class="text-muted">
                                @if (request('search'))
                                    Searching for: "{{ request('search') }}"
                                @endif
                                @if (request('stock_status'))
                                    {{ request('stock_status') == 'in_stock' ? 'In Stock' : 'Out of Stock' }} Products
                                @endif
                                ({{ $products->total() }} results)
                            </small>
                        </div>
                    @endif
                    <div class="card-body p-0">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Value</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr class="alert" role="alert">
                                        <td>
                                            <label class="checkbox-wrap checkbox-primary">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            @if ($product->image)
                                                <div class="product-image"
                                                    style="
                                            width: 80px;
                                            height: 80px;
                                            background-image: url('{{ Storage::url($product->image) }}');
                                            background-size: cover;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            border-radius: 8px;
                                        ">
                                                </div>
                                            @else
                                                <div class="product-image-placeholder"
                                                    style="
                                            width: 80px;
                                            height: 80px;
                                            background-color: #e9ecef;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            border-radius: 8px;
                                        ">
                                                    <i class="fas fa-image text-muted"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="product-details">
                                                <span class="d-block">{{ $product->name }}</span>
                                                <small
                                                    class="text-muted">{{ Str::limit($product->description, 50) }}</small>
                                            </div>
                                        </td>
                                        <td>${{ number_format($product->price, 2) }}</td>
                                        <td class="quantity">
                                            <div class="input-group">
                                                <input type="number" name="quantity"
                                                    class="quantity form-control input-number"
                                                    value="{{ $product->stock_quantity }}" min="0" max="1000">
                                            </div>
                                        </td>
                                        <td>${{ number_format($product->price * $product->stock_quantity, 2) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('inventory.edit', $product) }}"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('inventory.destroy', $product) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">
                                            <p class="text-muted">No products found</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
