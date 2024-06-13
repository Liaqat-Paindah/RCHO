<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Report;


class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->paginate(1);
        return view('index', ['reports' => $reports]);

    }

    public function show()
    {
        $reports = Report::latest()->paginate(12);
        return view('reports', compact('reports'));

    }

}
