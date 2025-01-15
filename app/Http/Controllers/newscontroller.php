<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class newscontroller extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();
        return view('news', compact('news'));
    }
}
