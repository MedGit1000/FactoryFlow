<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')
            ->latest()
            ->paginate(10);

        // Calculate some statistics
        $totalEmployees = Employee::count();
        $activeEmployees = Employee::active()->count();
        $inactiveEmployees = Employee::inactive()->count();

        return view('employees.index', compact(
            'employees',
            'totalEmployees',
            'activeEmployees',
            'inactiveEmployees'
        ));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:employees,email',
        //     'phone' => 'nullable|string|max:20',
        //     'department_id' => 'required|string|max:255',
        //     'position' => 'required|string|max:255',
        //     'hire_date' => 'required|date',
        //     'salary' => 'required|numeric|min:0',
        //     'status' => 'required|in:active,inactive'
        // ]);

        // $employee = Employee::create($validatedData);

        // return redirect()->route('employees.index')
        //     ->with('success', 'Employee created successfully');
        // Validate the input
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'nullable|string|max:20',
            'department_id' => 'required|string|max:255', // Allow string input for department name
            'position' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'salary' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive'
        ]);

        // Check if the department exists
        $department = Department::where('name', $request->department_id)->first();

        if ($department) {
            // Use the existing department ID
            $validatedData['department_id'] = $department->id;
        } else {
            // Create a new department and set full_name to the same value as name
            $newDepartment = Department::create([
                'name' => $request->department_id,
                'full_name' => $request->department_id, // Set full_name to the same value as name
                'email' => 'default@example.com',
                'position' => 'default_position'
            ]);
            $validatedData['department_id'] = $newDepartment->id; // Use the new department ID
        }

        // Store the employee in the database
        $employee = Employee::create($validatedData);

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        return view('employees.edit', compact('employee', 'departments'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('employees')->ignore($employee->id)
            ],
            'phone' => 'nullable|string|max:20',
            'department_id' => 'required|exists:departments,id',
            'position' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'salary' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive'
        ]);

        $employee->update($validatedData);

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully');
    }
}
