<?php

namespace App\Http\Controllers;
use App\Models\Staff;


use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::get();
         return view('staff', compact('staff'));
    }
}
