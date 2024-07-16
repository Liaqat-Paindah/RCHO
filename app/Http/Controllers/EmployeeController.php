<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees=Employee::get();
        return view('admin.employee', compact('employees'));
    }

    public function show_details($id)
    {
        return view('admin.employee_details');

    }
    public function details($id)
    {
        $employee = Employee::find($id);
        return view('admin.employee_details', compact('employee'));
    }

    public function show_update()
    {

    }

    public function update(Request $request, Employee $employee)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'nationality' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'emergency_contact_name' => 'required',
            'emergency_contact_number' => 'required',
            'job_title' => 'required',
            'joining_date' => 'required|date',
            'department_id' => 'required|integer',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            'status' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $employee->update($validatedData);
        return back()->with('success', 'Employee updated successfully.');
    }

    public function show_delete()
    {
        return view('admin.employee_delete');
    }
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete(); 
        return view('admin.employee_delete');
    }
}
