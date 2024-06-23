<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuccessStory;


class SuccessStoryController extends Controller
{
    public function index()
    {

        $stories=SuccessStory::get();
        return view('stories',  compact('stories'));
    }

    public function details()
    {
        return view('stories_details');
    }
    
    public function show_details($id)
    {

        $stories = SuccessStory::find($id);
        return view('stories_details', compact('stories'));
    }
}
