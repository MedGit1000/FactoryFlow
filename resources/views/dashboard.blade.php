{{-- {@extends('layouts.dashboard')

@section('content')
    @php
        $allEmpty =
            (!isset($totalProducts) || $totalProducts === 0 || $totalProducts === null) &&
            (!isset($lowStockItems) || $lowStockItems === 0 || $lowStockItems === null) &&
            (!isset($activeProductionLines) || $activeProductionLines === 0 || $activeProductionLines === null) &&
            (!isset($pendingOrders) || $pendingOrders === 0 || $pendingOrders === null) &&
            (!isset($totalOrders) || $totalOrders === 0 || $totalOrders === null) &&
            (!isset($completedOrders) || $completedOrders === 0 || $completedOrders === null);
    @endphp

    @if ($allEmpty)
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning text-center" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    No data available in the system. Get started by:
                    <div class="mt-2">
                        <a href="{{ route('inventory.create') }}" class="btn btn-primary mx-1">
                            <i class="fas fa-plus"></i> Add First Product
                        </a>
                        <a href="{{ route('orders.create') }}" class="btn btn-success mx-1">
                            <i class="fas fa-shopping-cart"></i> Create First Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Dashboard Overview</h1>
            </div>
        </div>

        <div class="row">
            <!-- Inventory Summary -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-boxes"></i> Inventory Status
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Total Products: {{ $totalProducts ?? 0 }}</h5>
                        <p class="card-text">Low Stock Items: {{ $lowStockItems ?? 0 }}</p>
                        <a href="{{ route('inventory.index') }}" class="btn btn-outline-primary">View Inventory</a>
                    </div>
                </div>
            </div>

            <!-- Production Summary -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        <i class="fas fa-industry"></i> Production Overview
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Active Production Lines: {{ $activeProductionLines ?? 0 }}</h5>
                        <p class="card-text">Pending Orders: {{ $pendingOrders ?? 0 }}</p>
                        <a href="{{ route('production.index') }}" class="btn btn-outline-success">Manage Production</a>
                    </div>
                </div>
            </div>

            <!-- Orders Summary -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-warning text-white">
                        <i class="fas fa-shopping-cart"></i> Order Tracking
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Total Orders: {{ $totalOrders ?? 0 }}</h5>
                        <p class="card-text">Completed Orders: {{ $completedOrders ?? 0 }}</p>
                        <a href="{{ route('orders.index') }}" class="btn btn-outline-warning">View Orders</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Quick Actions</h2>
            </div>
        </div>

        <div class="row">
            @canany(['create-product', 'manage-inventory'])
                <div class="col-md-4">
                    <div class="card text-center mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Add New Product</h5>
                            <a href="{{ route('inventory.create') }}" class="btn btn-primary">Add Product</a>
                        </div>
                    </div>
                </div>
            @endcanany

            @canany(['create-order', 'manage-orders'])
                <div class="col-md-4">
                    <div class="card text-center mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Create New Order</h5>
                            <a href="{{ route('orders.create') }}" class="btn btn-success">New Order</a>
                        </div>
                    </div>
                </div>
            @endcanany

            @canany(['view-employees', 'manage-employees'])
                <div class="col-md-4">
                    <div class="card text-center mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Manage Employees</h5>
                            <a href="{{ route('employees.index') }}" class="btn btn-warning">View Employees</a>
                        </div>
                    </div>
                </div>
            @endcanany
        </div>
    @endif
@endsection
} --}}


{{-- @extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Inventory</h5>
                            <h2 class="card-title">Performance Overview</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                    <input type="radio" name="options" checked>
                                    <span class="d-none d-sm-block">Accounts</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-single-02"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-primary btn-simple" id="1">
                                    <input type="radio" class="d-none" name="options">
                                    <span class="d-none d-sm-block">Purchases</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-gift-2"></i>
                                    </span>
                                </label>
                                <label class="btn btn-sm btn-primary btn-simple" id="2">
                                    <input type="radio" class="d-none" name="options">
                                    <span class="d-none d-sm-block">Sessions</span>
                                    <span class="d-block d-sm-none">
                                        <i class="tim-icons icon-tap-02"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Products</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> <span
                            id="totalProducts">{{ $totalProducts ?? 0 }}</span></h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLinePurple"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Pending Orders</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> <span
                            id="pendingOrders">{{ $pendingOrders ?? 0 }}</span></h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="CountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Completed Orders</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> <span
                            id="completedOrders">{{ $completedOrders ?? 0 }}</span></h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLineGreen"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h6 class="title d-inline">Recent Orders</h6>
                    <p class="card-category d-inline">today</p>
                    <div class="dropdown">
                        <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                            <i class="tim-icons icon-settings-gear-63"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#pablo">Action</a>
                            <a class="dropdown-item" href="#pablo">Another action</a>
                            <a class="dropdown-item" href="#pablo">Something else</a>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-full-width table-responsive">
                        <table class="table">
                            <tbody id="recentOrdersBody">
                                @if (isset($orders) && $orders->isNotEmpty())
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="title">Order ID: {{ $order->id }}</p>
                                                <p class="text-muted">{{ $order->customer_name }}</p>
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                    class="btn btn-link">
                                                    <i class="tim-icons icon-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="text-center">No recent orders available.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th class="text-center">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dakota Rice</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td class="text-center">$36,738</td>
                                </tr>
                                <tr>
                                    <td>Minerva Hooper</td>
                                    <td>Curaçao</td>
                                    <td>Sinaai-Waas</td>
                                    <td class="text-center">$23,789</td>
                                </tr>
                                <tr>
                                    <td>Sage Rodriguez</td>
                                    <td>Netherlands</td>
                                    <td>Baileux</td>
                                    <td class="text-center">$56,142</td>
                                </tr>
                                <tr>
                                    <td>Philip Chaney</td>
                                    <td>Korea, South</td>
                                    <td>Overland Park</td>
                                    <td class="text-center">$38,735</td>
                                </tr>
                                <tr>
                                    <td>Doris Greene</td>
                                    <td>Malawi</td>
                                    <td>Feldkirchen in Kärnten</td>
                                    <td class="text-center">$63,542</td>
                                </tr>
                                <tr>
                                    <td>Mason Porter</td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                    <td class="text-center">$78,615</td>
                                </tr>
                                <tr>
                                    <td>Jon Porter</td>
                                    <td>Portugal</td>
                                    <td>Gloucester</td>
                                    <td class="text-center">$98,615</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const updateData = async () => {
                try {
                    const response = await fetch(
                        '/api/dashboard-data'); // Adjust the API endpoint as needed
                    const data = await response.json();

                    // Update total products, pending orders, and completed orders
                    document.getElementById('totalProducts').innerText = data.totalProducts;
                    document.getElementById('pendingOrders').innerText = data.pendingOrders;
                    document.getElementById('completedOrders').innerText = data.completedOrders;

                    // Update recent orders table
                    const recentOrdersBody = document.getElementById('recentOrdersBody');
                    recentOrdersBody.innerHTML = ''; // Clear existing rows
                    data.orders.forEach(order => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>
                                <p class="title">Order ID: ${order.id}</p>
                                <p class="text-muted">${order.customer_name}</p>
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-link">
                                    <i class="tim-icons icon-pencil"></i>
                                </button>
                            </td>
                        `;
                        recentOrdersBody.appendChild(row);
                    });

                    // Update charts (assuming you have a function to render charts)
                    renderCharts(data.chartData);
                } catch (error) {
                    console.error('Error fetching dashboard data:', error);
                }
            };

            // Event listeners for radio buttons
            document.querySelectorAll('input[name="options"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    // Fetch and update chart data based on selected option
                    updateChartData(this.id);
                });
            });

            // Initial data fetch
            updateData();
            setInterval(updateData, 60000); // Refresh data every minute
        });

        const renderCharts = (chartData) => {
            // Implement your chart rendering logic here using chartData
            // For example, using Chart.js or any other chart library
        };

        const updateChartData = (optionId) => {
            // Fetch and update chart data based on the selected option
            // You can implement this function to fetch data based on the selected radio button
        };
    </script>
    =======
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom Dashboard JS -->
    <script src="{{ asset('Js/dashboard.js') }}"></script>
@endsection --}}

@extends('layouts.dashboard')

@section('content')
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category">Total Inventory</h5>
                                <h2 class="card-title">Performance Overview</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    @php
                                        $options = [
                                            ['id' => '0', 'icon' => 'single-02', 'label' => 'Accounts'],
                                            ['id' => '1', 'icon' => 'gift-2', 'label' => 'Purchases'],
                                            ['id' => '2', 'icon' => 'tap-02', 'label' => 'Sessions'],
                                        ];
                                    @endphp
                                    @foreach ($options as $option)
                                        <label class="btn btn-sm btn-primary btn-simple {{ $loop->first ? 'active' : '' }}"
                                            id="{{ $option['id'] }}">
                                            <input type="radio" name="options" {{ $loop->first ? 'checked' : '' }}>
                                            <span class="d-none d-sm-block">{{ $option['label'] }}</span>
                                            <span class="d-block d-sm-none">
                                                <i class="tim-icons icon-{{ $option['icon'] }}"></i>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="mainPerformanceChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @php
                $dashboardCards = [
                    [
                        'category' => 'Total Products',
                        'icon' => 'bell-55',
                        'iconColor' => 'primary',
                        'id' => 'totalProducts',
                        'chartId' => 'chartLinePurple',
                    ],
                    [
                        'category' => 'Pending Orders',
                        'icon' => 'delivery-fast',
                        'iconColor' => 'info',
                        'id' => 'pendingOrders',
                        'chartId' => 'CountryChart',
                    ],
                    [
                        'category' => 'Completed Orders',
                        'icon' => 'send',
                        'iconColor' => 'success',
                        'id' => 'completedOrders',
                        'chartId' => 'chartLineGreen',
                    ],
                ];
            @endphp
            @if (!empty($dashboardCards) && !empty($card))
                {

                }

                @foreach ($dashboardCards as $card)
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">{{ $card['category'] }}</h5>
                                <h3 class="card-title">
                                    <i class="tim-icons icon-{{ $card['icon'] }} text-{{ $card['iconColor'] }}"></i>
                                    <span id="{{ $card['id'] }}">{{ $$card['id'] ?? 0 }}</span>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="{{ $card['chartId'] }}"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card card-tasks">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="title d-inline">Recent Orders</h6>
                                <p class="card-category d-inline ml-2">Today</p>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="tim-icons icon-settings-gear-63"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('orders.index') }}">View All Orders</a>
                                    <a class="dropdown-item" href="{{ route('orders.create') }}">Create New Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-full-width table-responsive">
                            <table class="table">
                                <tbody id="recentOrdersBody">
                                    @forelse($recentOrders ?? [] as $order)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $order->id }}">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="title">Order #{{ $order->id }}</p>
                                                <p class="text-muted">{{ $order->customer_name }}</p>
                                            </td>
                                            <td class="td-actions text-right">
                                                <a href="{{ route('orders.show', $order) }}" class="btn btn-link"
                                                    title="View Order">
                                                    <i class="tim-icons icon-zoom-split"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                <p>No recent orders</p>
                                                <a href="{{ route('orders.create') }}" class="btn btn-primary">
                                                    Create First Order
                                                </a>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Top Performing Products</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter">
                                <thead class="text-primary">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Stock</th>
                                        <th class="text-center">Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($topProducts ?? [] as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td class="text-center">${{ number_format($product->sales, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const updateData = async () => {
                    try {
                        const response = await fetch('/api/dashboard-data');
                        const data = await response.json();

                        document.getElementById('totalProducts').innerText = data.totalProducts;
                        document.getElementById('pendingOrders').innerText = data.pendingOrders;
                        document.getElementById('completedOrders').innerText = data.completedOrders;

                        const recentOrdersBody = document.getElementById('recentOrdersBody');
                        recentOrdersBody.innerHTML = '';
                        data.orders.forEach(order => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="${order.id}">
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <p class="title">Order #${order.id}</p>
                                    <p class="text-muted">${order.customer_name}</p>
                                </td>
                                <td class="td-actions text-right">
                                    <a href="/orders/${order.id}" class="btn btn-link" title="View Order">
                                        <i class="tim-icons icon-zoom-split"></i>
                                    </a>
                                </td>
                            `;
                            recentOrdersBody.appendChild(row);
                        });

                        renderCharts(data.chartData);
                    } catch (error) {
                        console.error('Error fetching dashboard data:', error);
                    }
                };

                document.querySelectorAll('input[name="options"]').forEach(radio => {
                    radio.addEventListener('change', function() {
                        updateChartData(this.id);
                    });
                });

                updateData();
                setInterval(updateData, 60000);
            });

            const renderCharts = (chartData) => {
                // Implement your chart rendering logic here
            };

            const updateChartData = (optionId) => {
                // Fetch and update chart data based on the selected option
            };
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('Js/dashboard.js') }}"></script>
    </div> --}}

    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Dashboard</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
            </ul>
        </div>

        <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-1 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            {{-- <div>
                                <p class="fw-medium text-primary-light mb-1">Total Users</p>
                                @if ($totalUsers > 0)
                                    <h6 class="mb-0">{{ number_format($totalUsers) }}</h6>
                                @else
                                    <h6 class="mb-0 text-muted">No users found</h6>
                                @endif
                            </div> --}}
                            <div>
                                @if (empty($users))
                                    <p>No users found.</p>
                                @else
                                    <h3>Total Users: {{ $users->count() }}</h3>
                                    <ul>
                                        @foreach ($users as $user)
                                            <li>{{ $user->name }} ({{ $user->email }})</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div
                                class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="gridicons:multiple-users"
                                    class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                            <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                    icon="bxs:up-arrow" class="text-xs"></iconify-icon> +5000</span>
                            Last 30 days users
                        </p>
                    </div>
                </div>
                {{-- card end  --}}
            </div>
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-2 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total Subscription</p>
                                <h6 class="mb-0">15,000</h6>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                            <span class="d-inline-flex align-items-center gap-1 text-danger-main"><iconify-icon
                                    icon="bxs:down-arrow" class="text-xs"></iconify-icon> -800</span>
                            Last 30 days subscription
                        </p>
                    </div>
                </div>
                {{-- card end  --}}
            </div>
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-3 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total Free Users</p>
                                <h6 class="mb-0">5,000</h6>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="fluent:people-20-filled"
                                    class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                            <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                    icon="bxs:up-arrow" class="text-xs"></iconify-icon> +200</span>
                            Last 30 days users
                        </p>
                    </div>
                </div>
                {{-- card end  --}}
            </div>
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-4 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total Income</p>
                                <h6 class="mb-0">$42,000</h6>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-success-main rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                            <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                    icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$20,000</span>
                            Last 30 days income
                        </p>
                    </div>
                </div>
                {{-- card end  --}}
            </div>
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-5 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total Expense</p>
                                <h6 class="mb-0">$30,000</h6>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-red rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="fa6-solid:file-invoice-dollar"
                                    class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                        <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                            <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                    icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$5,000</span>
                            Last 30 days expense
                        </p>
                    </div>
                </div>
                {{-- card end  --}}
            </div>
        </div>

        <div class="row gy-4 mt-1">
            <div class="col-xxl-6 col-xl-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <h6 class="text-lg mb-0">Sales Statistic</h6>
                            <select class="form-select bg-base form-select-sm w-auto">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Today</option>
                            </select>
                        </div>
                        <div class="d-flex flex-wrap align-items-center gap-2 mt-8">
                            <h6 class="mb-0">$27,200</h6>
                            <span
                                class="text-sm fw-semibold rounded-pill bg-success-focus text-success-main border br-success px-8 py-4 line-height-1 d-flex align-items-center gap-1">
                                10% <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon>
                            </span>
                            <span class="text-xs fw-medium">+ $1500 Per Day</span>
                        </div>
                        <div id="chart" class="pt-28 apexcharts-tooltip-style-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
                <div class="card h-100 radius-8 border">
                    <div class="card-body p-24">
                        <h6 class="mb-12 fw-semibold text-lg mb-16">Total Subscriber</h6>
                        <div class="d-flex align-items-center gap-2 mb-20">
                            <h6 class="fw-semibold mb-0">5,000</h6>
                            <p class="text-sm mb-0">
                                <span
                                    class="bg-danger-focus border br-danger px-8 py-2 rounded-pill fw-semibold text-danger-main text-sm d-inline-flex align-items-center gap-1">
                                    10%
                                    <iconify-icon icon="iconamoon:arrow-down-2-fill" class="icon"></iconify-icon>
                                </span>
                                - 20 Per Day
                            </p>
                        </div>

                        <div id="barChart"></div>

                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
                <div class="card h-100 radius-8 border-0 overflow-hidden">
                    <div class="card-body p-24">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg">Users Overview</h6>
                            <div class="">
                                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                    <option>Today</option>
                                    <option>Weekly</option>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                </select>
                            </div>
                        </div>


                        <div id="userOverviewDonutChart"></div>

                        <ul class="d-flex flex-wrap align-items-center justify-content-between mt-3 gap-3">
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-12-px radius-2 bg-primary-600"></span>
                                <span class="text-secondary-light text-sm fw-normal">New:
                                    <span class="text-primary-light fw-semibold">500</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-12-px radius-2 bg-yellow"></span>
                                <span class="text-secondary-light text-sm fw-normal">Subscribed:
                                    <span class="text-primary-light fw-semibold">300</span>
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-12">
                <div class="card h-100">
                    <div class="card-body p-24">

                        <div class="d-flex flex-wrap align-items-center gap-1 justify-content-between mb-16">
                            <ul class="nav border-gradient-tab nav-pills mb-0" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center active" id="pills-to-do-list-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-to-do-list" type="button"
                                        role="tab" aria-controls="pills-to-do-list" aria-selected="true">
                                        Latest Registered
                                        <span
                                            class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">35</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-flex align-items-center" id="pills-recent-leads-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-recent-leads" type="button"
                                        role="tab" aria-controls="pills-recent-leads" aria-selected="false"
                                        tabindex="-1">
                                        Latest Subscribe
                                        <span
                                            class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">35</span>
                                    </button>
                                </li>
                            </ul>
                            <a href="javascript:void(0)"
                                class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-to-do-list" role="tabpanel"
                                aria-labelledby="pills-to-do-list-tab" tabindex="0">
                                <div class="table-responsive scroll-sm">
                                    <table class="table bordered-table sm-table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Users </th>
                                                <th scope="col">Registered On</th>
                                                <th scope="col">Plan</th>
                                                <th scope="col" class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user1.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">redaniel@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Free</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user2.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">xterris@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Basic</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user3.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">seannand@mail.ru</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Standard</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user4.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Bessie Cooper </h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">igerrin@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Business</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user5.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">fellora@mail.ru</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Enterprise </td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-recent-leads" role="tabpanel"
                                aria-labelledby="pills-recent-leads-tab" tabindex="0">
                                <div class="table-responsive scroll-sm">
                                    <table class="table bordered-table sm-table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Users </th>
                                                <th scope="col">Registered On</th>
                                                <th scope="col">Plan</th>
                                                <th scope="col" class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user1.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">redaniel@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Free</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user2.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">xterris@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Basic</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user3.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">seannand@mail.ru</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Standard</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user4.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Bessie Cooper </h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">igerrin@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Business</td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('') }}/images/users/user5.png"
                                                            alt=""
                                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                        <div class="flex-grow-1">
                                                            <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                                            <span
                                                                class="text-sm text-secondary-light fw-medium">fellora@mail.ru</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>27 Mar 2024</td>
                                                <td>Enterprise </td>
                                                <td class="text-center">
                                                    <span
                                                        class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Top Performer</h6>
                            <a href="javascript:void(0)"
                                class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>

                        <div class="mt-32">

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('') }}/images/users/user1.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">$20</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('') }}/images/users/user2.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">$20</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('') }}/images/users/user3.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">$30</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('') }}/images/users/user4.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-medium">Bessie Cooper</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">$40</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('') }}/images/users/user5.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">$10</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between gap-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('') }}/images/users/user1.png" alt=""
                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                        <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                                    </div>
                                </div>
                                <span class="text-primary-light text-md fw-medium">$10</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Top Countries</h6>
                            <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                <option>Today</option>
                                <option>Weekly</option>
                                <option>Monthly</option>
                                <option>Yearly</option>
                            </select>
                        </div>

                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div id="world-map" class="h-100 border radius-8"></div>
                            </div>

                            <div class="col-lg-6">
                                <div class="h-100 border p-16 pe-0 radius-8">
                                    <div class="max-h-266-px overflow-y-auto scroll-sm pe-16">
                                        <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('') }}/images/flags/flag1.png" alt=""
                                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-sm mb-0">USA</h6>
                                                    <span class="text-xs text-secondary-light fw-medium">1,240
                                                        Users</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 w-100">
                                                <div class="w-100 max-w-66 ms-auto">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-primary-600 rounded-pill"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <span class="text-secondary-light font-xs fw-semibold">80%</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('') }}/images/flags/flag2.png" alt=""
                                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-sm mb-0">Japan</h6>
                                                    <span class="text-xs text-secondary-light fw-medium">1,240
                                                        Users</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 w-100">
                                                <div class="w-100 max-w-66 ms-auto">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-orange rounded-pill"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                                <span class="text-secondary-light font-xs fw-semibold">60%</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('') }}/images/flags/flag3.png" alt=""
                                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-sm mb-0">France</h6>
                                                    <span class="text-xs text-secondary-light fw-medium">1,240
                                                        Users</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 w-100">
                                                <div class="w-100 max-w-66 ms-auto">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-yellow rounded-pill"
                                                            style="width: 49%;"></div>
                                                    </div>
                                                </div>
                                                <span class="text-secondary-light font-xs fw-semibold">49%</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('') }}/images/flags/flag4.png" alt=""
                                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-sm mb-0">Germany</h6>
                                                    <span class="text-xs text-secondary-light fw-medium">1,240
                                                        Users</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 w-100">
                                                <div class="w-100 max-w-66 ms-auto">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-success-main rounded-pill"
                                                            style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                                <span class="text-secondary-light font-xs fw-semibold">100%</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('') }}/images/flags/flag5.png" alt=""
                                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-sm mb-0">South Korea</h6>
                                                    <span class="text-xs text-secondary-light fw-medium">1,240
                                                        Users</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 w-100">
                                                <div class="w-100 max-w-66 ms-auto">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-info-main rounded-pill"
                                                            style="width: 30%;"></div>
                                                    </div>
                                                </div>
                                                <span class="text-secondary-light font-xs fw-semibold">30%</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between gap-3">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('') }}/images/flags/flag1.png" alt=""
                                                    class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                <div class="flex-grow-1">
                                                    <h6 class="text-sm mb-0">USA</h6>
                                                    <span class="text-xs text-secondary-light fw-medium">1,240
                                                        Users</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 w-100">
                                                <div class="w-100 max-w-66 ms-auto">
                                                    <div class="progress progress-sm rounded-pill" role="progressbar"
                                                        aria-label="Success example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-primary-600 rounded-pill"
                                                            style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <span class="text-secondary-light font-xs fw-semibold">80%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="mb-2 fw-bold text-lg mb-0">Generated Content</h6>
                            <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                <option>Today</option>
                                <option>Weekly</option>
                                <option>Monthly</option>
                                <option>Yearly</option>
                            </select>
                        </div>

                        <ul class="d-flex flex-wrap align-items-center mt-3 gap-3">
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-12-px rounded-circle bg-primary-600"></span>
                                <span class="text-secondary-light text-sm fw-semibold">Word:
                                    <span class="text-primary-light fw-bold">500</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="w-12-px h-12-px rounded-circle bg-yellow"></span>
                                <span class="text-secondary-light text-sm fw-semibold">Image:
                                    <span class="text-primary-light fw-bold">300</span>
                                </span>
                            </li>
                        </ul>

                        <div class="mt-40">
                            <div id="paymentStatusChart" class="margin-16-minus"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="d-footer">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
            </div>
            <div class="col-auto">
                <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
            </div>
        </div>
    </footer>
@endsection
