<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::where('stock_quantity', '>', 0)->get();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string|max:20',
            'products' => 'required|array',
            'products.*' => 'exists:products,id',
            'quantities' => 'required|array',
        ]);

        try {
            DB::beginTransaction();

            // Create Order
            $order = Order::create([
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'status' => 'pending',
                'order_date' => now(),
                'total_amount' => 0
            ]);

            // Create Order Items and Update Product Stock
            $totalAmount = 0;
            foreach ($request->products as $index => $productId) {
                $product = Product::findOrFail($productId);
                $quantity = $request->quantities[$index];

                // Check stock availability
                if ($product->stock_quantity < $quantity) {
                    throw new \Exception("Insufficient stock for {$product->name}");
                }

                // Create Order Item
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'unit_price' => $product->price
                ]);

                // Update Product Stock
                $product->decrement('stock_quantity', $quantity);

                // Calculate Total Amount
                $totalAmount += $product->price * $quantity;
            }

            // Update Order Total Amount
            $order->update(['total_amount' => $totalAmount]);

            DB::commit();

            return redirect()->route('orders.index')
                ->with('success', 'Order created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $products = Product::where('stock_quantity', '>', 0)->get();
        return view('orders.edit', compact('order', 'products'));
    }

    public function update(Request $request, Order $order)
    {
        // Similar to store method with additional logic for updating existing order
    }

    public function destroy(Order $order)
    {
        // Implement order cancellation logic
        $order->delete();
        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully');
    }
}
