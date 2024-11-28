<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    // Registration Routes
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Login Routes
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});


Route::middleware(['auth'])->group(function () {
    // Inventory Routes
    Route::get('/inventory', [InventoryController::class, 'index'])
        ->name('inventory.index');
    Route::get('/inventory/create', [InventoryController::class, 'create'])
        ->name('inventory.create');
    Route::post('/inventory', [InventoryController::class, 'store'])
        ->name('inventory.store');
    Route::get('/inventory/{product}/edit', [InventoryController::class, 'edit'])
        ->name('inventory.edit');
    Route::put('/inventory/{product}', [InventoryController::class, 'update'])
        ->name('inventory.update');
    Route::delete('/inventory/{product}', [InventoryController::class, 'destroy'])
        ->name('inventory.destroy');
});


Route::middleware(['auth'])->group(function () {
    // Production Routes
    Route::get('/production', [ProductionController::class, 'index'])
        ->name('production.index');
    Route::get('/production/create', [ProductionController::class, 'create'])
        ->name('production.create');
    Route::post('/production', [ProductionController::class, 'store'])
        ->name('production.store');
    Route::get('/production/{productionLine}/edit', [ProductionController::class, 'edit'])
        ->name('production.edit');
    Route::put('/production/{productionLine}', [ProductionController::class, 'update'])
        ->name('production.update');
    Route::delete('/production/{productionLine}', [ProductionController::class, 'destroy'])
        ->name('production.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Category Routes
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])
        ->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])
        ->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])
        ->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])
        ->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])
        ->name('categories.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Order Routes
    Route::get('/orders', [OrderController::class, 'index'])
        ->name('orders.index');
    Route::get('/orders/create', [OrderController::class, 'create'])
        ->name('orders.create');
    Route::post('/orders', [OrderController::class, 'store'])
        ->name('orders.store');
    Route::get('/orders/{order}', [OrderController::class, 'show'])
        ->name('orders.show');
    Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])
        ->name('orders.edit');
    Route::put('/orders/{order}', [OrderController::class, 'update'])
        ->name('orders.update');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])
        ->name('orders.destroy');
});


Route::middleware(['auth'])->group(function () {
    // Employee Routes
    Route::get('/employees', [EmployeeController::class, 'index'])
        ->name('employees.index');
    Route::get('/employees/create', [EmployeeController::class, 'create'])
        ->name('employees.create');
    Route::post('/employees', [EmployeeController::class, 'store'])
        ->name('employees.store');
    Route::get('/employees/{employee}', [EmployeeController::class, 'show'])
        ->name('employees.show');
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])
        ->name('employees.edit');
    Route::put('/employees/{employee}', [EmployeeController::class, 'update'])
        ->name('employees.update');
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])
        ->name('employees.destroy');
});




Route::middleware(['auth'])->group(function () {
    // Supplier Routes
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
    Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
    Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__ . '/auth.php';
