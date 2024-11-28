<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class InventoryController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('inventory.index', compact('products'));
    }

    public function create()
    {
        // return view('inventory.create');
        $categories = Category::all();
        return view('inventory.create', compact('categories'));
    }

    public function store(Request $request)
    { {
            //}
            // $validatedData = $request->validate([
            //     'name' => 'required|string|max:255|unique:products,name',
            //     'description' => 'nullable|string',
            //     'category_name' => 'required|string|max:255',
            //     'price' => 'required|numeric|min:0',
            //     'product_image' => 'nullable|image|max:2048'
            // ]);

            // // Find or create category
            // $category = Category::firstOrCreate(
            //     ['name' => $validatedData['category_name']],
            //     ['name' => $validatedData['category_name']]
            // );

            // // Create the product
            // $product = new Product();
            // $product->name = $validatedData['name'];
            // $product->description = $validatedData['description'] ?? null;
            // $product->category_id = $category->id;
            // $product->price = $validatedData['price'];
            // $product->stock_quantity = 0;

            // // Handle image upload
            // if ($request->hasFile('product_image')) {
            //     $imagePath = $request->file('product_image')->store('products', 'public');
            //     $product->image = $imagePath;
            // }

            // // Save the product
            // $product->save();

            // // Return JSON response for AJAX
            // return response()->json([
            //     'message' => 'Product created successfully',
            //     'redirect' => route('inventory.index')
            // ]);
            //{

        }
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|unique:products,name',
                'description' => 'nullable|string',
                'category_name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'product_image' => 'nullable|image|max:2048'
            ]);

            // Find or create category
            $category = Category::firstOrCreate(
                ['name' => $validatedData['category_name']],
                ['name' => $validatedData['category_name']]
            );

            // Create the product
            $product = new Product();
            $product->name = $validatedData['name'];
            $product->description = $validatedData['description'] ?? null;
            $product->category_id = $category->id;
            $product->price = $validatedData['price'];
            $product->stock_quantity = 0;

            // Handle image upload conditionally
            if ($request->hasFile('product_image')) {
                $imagePath = $request->file('product_image')->store('products', 'public');

                // Check if the image column exists before setting it
                if (Schema::hasColumn('products', 'image')) {
                    $product->image = $imagePath;
                }
            }

            // Save the product
            $product->save();

            // Return JSON response for AJAX
            return response()->json([
                'message' => 'Product created successfully',
                'redirect' => route('inventory.index')
            ]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Product creation error: ' . $e->getMessage());

            // Return error response
            return response()->json([
                'message' => 'An error occurred while creating the product',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function edit(Product $product)
    {
        return view('inventory.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $product->id,
            'description' => 'nullable|string',
            'stock_quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
        ]);

        // Update the product details
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->stock_quantity = $validatedData['stock_quantity'];
        $product->price = $validatedData['price'];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        // Save the product
        $product->save();

        // Redirect with success message
        return redirect()->route('inventory.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('inventory.index')
            ->with('success', 'Product deleted successfully');
    }
}
