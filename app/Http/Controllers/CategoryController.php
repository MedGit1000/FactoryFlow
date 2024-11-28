<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryGroups = [
            'Raw Materials' => Category::where('type', 'raw_material')->get(),
            'Finished Goods' => Category::where('type', 'finished_goods')->get(),
            'Services' => Category::where('type', 'service')->get()
        ];

        // Alternative approach if you want a more dynamic grouping
        $categoryGroups = Category::all()->groupBy('type');

        // Simple fallback if no grouping is needed
        $categories = Category::all();

        return view('inventory.create', [
            'categoryGroups' => $categoryGroups,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'nullable|string|max:500'
        ]);

        $category = Category::create($validated);

        return response()->json([
            'id' => $category->id,
            'name' => $category->name
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
