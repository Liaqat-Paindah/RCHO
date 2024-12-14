<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    public function index()
    {
        $allservices =Service::get();
        return view('services', compact('allservices'));
    }

    public function show($category)
    {
        $services =Service::where('service_name', $category)->get();
        return view('services', compact('services', 'category'));
    }

        public function do()
        {
            return view('do');
        }

        public function contact()
        {
            return view('contact');
        }

}
