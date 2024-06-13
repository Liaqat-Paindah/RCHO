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
}
