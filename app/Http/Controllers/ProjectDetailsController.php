<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectDetailsController extends Controller
{
    public function index()
    {
        $projects2=Project::get();
        
        return view('project_details', compact('projects2'));
    }

    public function show()
    {
        
        return view('project_details');
    }
}
