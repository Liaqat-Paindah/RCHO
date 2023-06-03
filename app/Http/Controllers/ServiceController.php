<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\team;
use App\Models\event;
use Illuminate\Http\Request;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::where('Catagory_id', '1')->get();
        $manages=Service::where('Catagory_id', '2')->get();
        $events=event::get();

        $teams=Team::where('position','!=', 'CEO')->get();

        return view('index', compact('manages', 'services', 'teams', 'events'));
    }

     public function manage()
     {


     }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png',
    
           ]);
           $name = $request->file('file')->getClientOriginalName();
           $path = $request->file('file')->store('public/assets');
           $save = new Service;
           $save->title = $request->input('title');
           $save->desc = $request->input('Desc');
           $save->type = 'Need to specify';
           $file = $request->file('file');
           $extenstion = $file->getClientOriginalName();
           $filename = time().'.'.$extenstion;
          $path_file= $file->move('assets/img/Services', $filename);
           $save->image = $path_file;
           $save->Catagory_id = $request->input('type');
           $save->save();
           return back()->with('status', 'Data Successfully Uploaded to database.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $managements=Service::where('Catagory_id', '2')->get();
        return view('index', compact('managements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }
    
    public function Service_list(Service $service)
    {
        $Services=Service::paginate(10);
        $count=Service::count();
        return view('admin.service_list', compact('Services', 'count'));
        
    }

    public function Service_add(Service $service)
    {

        return view('admin.service_add');
        
    }
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $Service = Service::find($id);
        $Service->delete(); 
        if($Service)
        {
            return back()->with('success','Service Deleted Successfully');
        }
        else
        {
           return back()->with('fail','Something wrong');
        }
    }
}
