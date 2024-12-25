<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Employee;
use App\Models\ProductionLine;
use Illuminate\Support\Facades\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Log as FacadesLog;

class DashboardController extends Controller
{
    //     public function index()
    //     {
    //         // $users = User::all(); // Fetch all users
    //         $users = User::latest()->take(5)->get();

    //         $data = [
    //             'users' => $users,
    //             'totalUsers' => User::count(),
    //             // Add more metrics as needed
    //         ];

    //         return view('dashboard', $data);

    //         $totalProducts = Product::count() ?: 0;
    //         $lowStockItems = Product::lowStock()->count() ?: 0;
    //         $activeProductionLines = ProductionLine::where('status', 'active')->count() ?: 0;
    //         $pendingOrders = Order::where('status', 'pending')->count() ?: 0;
    //         $totalOrders = Order::count() ?: 0;
    //         $completedOrders = Order::where('status', 'completed')->count() ?: 0;

    //         // Monthly Orders Data (for charts)
    //         $monthlyOrders = Order::select(
    //             DB::raw('MONTH(created_at) as month'),
    //             DB::raw('COUNT(*) as count')
    //         )
    //             ->whereYear('created_at', Carbon::now()->year)
    //             ->groupBy('month')
    //             ->orderBy('month')
    //             ->get()
    //             ->pluck('count', 'month')
    //             ->toArray();

    //         // Fill in missing months with zeros
    //         $chartData = array_replace(
    //             array_fill(1, 12, 0),
    //             $monthlyOrders
    //         );

    //         // Recent Orders with more details
    //         $orders = Order::with(['customer', 'products'])
    //             ->latest()
    //             ->take(5)
    //             ->get()
    //             ->map(function ($order) {
    //                 return [
    //                     'id' => $order->id,
    //                     'customer_name' => $order->customer->name ?? 'N/A',
    //                     'total' => $order->total,
    //                     'status' => $order->status,
    //                     'created_at' => $order->created_at->diffForHumans(),
    //                     'products_count' => $order->products->count()
    //                 ];
    //             });

    //         // Top Selling Products
    //         $topProducts = Product::select('products.*', DB::raw('COUNT(order_product.product_id) as sales_count'))
    //             ->leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
    //             ->groupBy('products.id')
    //             ->orderByDesc('sales_count')
    //             ->limit(5)
    //             ->get();

    //         // Stock Status Distribution
    //         $stockStatus = [
    //             'low' => Product::lowStock()->count(),
    //             'normal' => Product::where('stock_quantity', '>=', 10)
    //                 ->where('stock_quantity', '<=', 50)
    //                 ->count(),
    //             'high' => Product::where('stock_quantity', '>', 50)->count()
    //         ];

    //         return view('dashboard', compact(
    //             'users',
    //             'totalProducts',
    //             'lowStockItems',
    //             'activeProductionLines',
    //             'pendingOrders',
    //             'totalOrders',
    //             'completedOrders',
    //             'orders',
    //             'chartData',
    //             'topProducts',
    //             'stockStatus'
    //         ));

    //     }

    // public function index()
    // {
    //     $totalUsers = User::count();

    //     $totalProducts = Product::count() ?: 0;
    //     $lowStockItems = Product::lowStock()->count() ?: 0;
    //     $activeProductionLines = ProductionLine::where('status', 'active')->count() ?: 0;
    //     $pendingOrders = Order::where('status', 'pending')->count() ?: 0;
    //     $totalOrders = Order::count() ?: 0;
    //     $completedOrders = Order::where('status', 'completed')->count() ?: 0;

    //     // Monthly Orders Data (for charts)
    //     $monthlyOrders = Order::select(
    //         DB::raw('MONTH(created_at) as month'),
    //         DB::raw('COUNT(*) as count')
    //     )
    //         ->whereYear('created_at', Carbon::now()->year)
    //         ->groupBy('month')
    //         ->orderBy('month')
    //         ->get()
    //         ->pluck('count', 'month')
    //         ->toArray();

    //     // Fill in missing months with zeros
    //     $chartData = array_replace(
    //         array_fill(1, 12, 0),
    //         $monthlyOrders
    //     );

    //     // Recent Orders with more details
    //     $orders = Order::with(['customer', 'products'])
    //         ->latest()
    //         ->take(5)
    //         ->get()
    //         ->map(function ($order) {
    //             return [
    //                 'id' => $order->id,
    //                 'customer_name' => $order->customer->name ?? 'N/A',
    //                 'total' => $order->total,
    //                 'status' => $order->status,
    //                 'created_at' => $order->created_at->diffForHumans(),
    //                 'products_count' => $order->products->count()
    //             ];
    //         });

    //     // Top Selling Products
    //     $topProducts = Product::select('products.*', DB::raw('COUNT(order_product.product_id) as sales_count'))
    //         ->leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
    //         ->groupBy('products.id')
    //         ->orderByDesc('sales_count')
    //         ->limit(5)
    //         ->get();

    //     // Stock Status Distribution
    //     $stockStatus = [
    //         'low' => Product::lowStock()->count(),
    //         'normal' => Product::where('stock_quantity', '>=', 10)
    //             ->where('stock_quantity', '<=', 50)
    //             ->count(),
    //         'high' => Product::where('stock_quantity', '>', 50)->count()
    //     ];

    //     return view('dashboard', compact(
    //         'users',
    //         'totalUsers',
    //         'totalProducts',
    //         'lowStockItems',
    //         'activeProductionLines',
    //         'pendingOrders',
    //         'totalOrders',
    //         'completedOrders',
    //         'orders',
    //         'chartData',
    //         'topProducts',
    //         'stockStatus'
    //     ));
    // }
    public function index()
    {
        $totalUsers = User::count();
        $users = User::latest()->take(5)->get();

        $totalProducts = Product::count() ?: 0;

        // Replace lowStock() with a direct query if the method is not defined
        $lowStockItems = Product::where('stock_quantity', '<', 10)->count() ?: 0;

        $activeProductionLines = ProductionLine::where('status', 'active')->count() ?: 0;
        $pendingOrders = Order::where('status', 'pending')->count() ?: 0;
        $totalOrders = Order::count() ?: 0;
        $completedOrders = Order::where('status', 'completed')->count() ?: 0;

        // Monthly Orders Data (for charts)
        $monthlyOrders = Order::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as count')
        )
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('count', 'month')
            ->toArray();

        // Fill in missing months with zeros
        $chartData = array_replace(
            array_fill(1, 12, 0),
            $monthlyOrders
        );

        // Recent Orders with more details
        $orders = Order::with(['customer', 'products'])
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($order) {
                return [
                    'id' => $order->id,
                    'customer_name' => $order->customer->name ?? 'N/A',
                    'total' => $order->total,
                    'status' => $order->status,
                    'created_at' => $order->created_at->diffForHumans(),
                    'products_count' => $order->products->count()
                ];
            });

        // Top Selling Products
        // $topProducts = Product::select('products.*', DB::raw('COUNT(order_product.product_id) as sales_count'))
        //     ->leftJoin('order_product', 'products.id', '=', 'order_product.product_id')
        //     ->groupBy('products.id')
        //     ->orderByDesc('sales_count')
        //     ->limit(5)
        //     ->get();

        // Stock Status Distribution
        $stockStatus = [
            'low' => Product::where('stock_quantity', '<', 10)->count(),
            'normal' => Product::where('stock_quantity', '>=', 10)
                ->where('stock_quantity', '<=', 50)
                ->count(),
            'high' => Product::where('stock_quantity', '>', 50)->count()
        ];
        $employees = Employee::with('department')
            ->latest()
            ->paginate(10);

        // Calculate some statistics
        $totalEmployees = Employee::count();
        $activeEmployees = Employee::active()->count();
        $inactiveEmployees = Employee::inactive()->count();
        $products = Product::paginate(10);

        return view('dashboard', compact(
            'totalUsers',
            'users',
            'totalProducts',
            'lowStockItems',
            'activeProductionLines',
            'pendingOrders',
            'totalOrders',
            'completedOrders',
            'orders',
            'chartData',
            // 'topProducts',
            'stockStatus',
            'employees',
            'inactiveEmployees',
            'activeEmployees',
            'totalEmployees',
            'products'
        ));
    }
}
