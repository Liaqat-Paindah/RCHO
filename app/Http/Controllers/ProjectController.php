<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::get();
        return view('project', compact('projects'));
    }

    public function completed()
    {
        $projects=Project::where('status', 'Completed')->get();
        return view('project_ct', compact('projects'));
    }    
    
    public function ongoing()
    {
        $projects=Project::where('status', 'Ongoing')->get();
        return view('project_on', compact('projects'));
    }
}
