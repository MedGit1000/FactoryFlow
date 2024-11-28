<?php

namespace App\Http\Controllers;

use App\Models\ProductionLine;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function index()
    {
        $productionLines = ProductionLine::paginate(10);
        return view('production.index', compact('productionLines'));
    }

    public function create()
    {
        return view('production.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:production_lines,name',
            'status' => 'required|in:active,inactive,maintenance',
            'capacity' => 'nullable|integer|min:0',
            'description' => 'nullable|string'
        ]);

        ProductionLine::create($validatedData);

        return redirect()->route('production.index')
            ->with('success', 'Production Line added successfully');
    }

    public function edit(ProductionLine $productionLine)
    {
        return view('production.edit', compact('productionLine'));
    }

    public function update(Request $request, ProductionLine $productionLine)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:production_lines,name,' . $productionLine->id,
            'status' => 'required|in:active,inactive,maintenance',
            'capacity' => 'nullable|integer|min:0',
            'description' => 'nullable|string'
        ]);

        $productionLine->update($validatedData);

        return redirect()->route('production.index')
            ->with('success', 'Production Line updated successfully');
    }

    public function destroy(ProductionLine $productionLine)
    {
        $productionLine->delete();

        return redirect()->route('production.index')
            ->with('success', 'Production Line deleted successfully');
    }
}
