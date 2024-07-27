<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;





class EmployeeController extends Controller
{


    public function save()
    {

        return view('admin.employee_new');
    
    }   
    
    public function store(Request $request)

    {
        
                   $empath = $request->file('image')->store('public\assets\img\employees');


                   // Create Job instance
                   $employee = new Employee;
                   $employee->first_name = $request->input('first_name');
                   $employee->last_name = $request->input('last_name');
                   $employee->email = $request->input('email');
                   $employee->gender = $request->input('gender');
                   $employee->date_of_birth = $request->input('dob');
                   $employee->nationality = $request->input('nationality');
                   $employee->address = $request->input('address');
                   $employee->phone_number = $request->input('phone_number');
                   $employee->emergency_contact_name = $request->input('emergency_contact_name');
                   $employee->emergency_contact_number = $request->input('emergency_contact_number');
                   $employee->job_title = $request->input('position');
                   $employee->department_id = $request->input('department_id');
                   $employee->joining_date = $request->input('joining_date');
                   $employee->image = $empath;
                   $employee->status = $request->input('status');

                 $employee->save(); // Save the job first to get its ID
                 
                  return back()->with('status', 'Employee Has been inserted successfully in database');
           
            }
        

    public function new()
    {
        return view('admin.employee_new');
    }

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
