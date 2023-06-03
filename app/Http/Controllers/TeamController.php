<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::orderBy('id', 'ASC')->limit(3)->get();
        $staffs=Team::where('id','>','5')->get();
        $messages=Team::where('position', 'CEO')->get();
        return view('team', compact('teams','messages', 'staffs'));
    }

    public function profile()
    {
        return view('team_profile');
    }
    public function create()
    {
        
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
            'fullname' => 'required|min:5',
            'postion' => 'required',
            'experience' => 'required',
            'graduation' => 'required',
            'degree' => 'required',
            'desc' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,png,webp',
           ]);
           $name = $request->file('image')->getClientOriginalName();
           $path = $request->file('image')->store('public/assets');
           $save = new Team;
           $save->name = $request->input('fullname');
           $save->position = $request->input('postion');
           $save->desc = $request->input('desc');
           $save->study_field = $request->input('degree');
           $save->graduation_info = $request->input('graduation');
           $save->experience = $request->input('experience');
           $file = $request->file('image');
           $extenstion = $file->getClientOriginalName();
           $filename = time().'.'.$extenstion;
          $path_file= $file->move('assets/img/team', $filename);
           $save->profile = $path_file;
           $save->save();
           if($save)
           {
               return back()->with('success','File Has been uploaded successfully in database');
           }
           else
           {
              return back()->with('fail','Something wrong');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        $teams=Team::where('position','!=', 'CEO')->get();
        $count=Team::count();
        return view('admin.team_member', compact('teams', 'count'));
    }
    public function show_profile($id)
    {
        $team = team::find($id);
        return view('team_profile', compact('team'));


    }
    public function edit($id)
    {
        $team = team::find($id);
        return view('admin.team_edit', compact('team'));

    }
    public function add(Request $request)
    {
        
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|min:5',
            'postion' => 'required',
            'experience' => 'required',
            'graduation' => 'required',
            'degree' => 'required',
            'desc' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,png',
           ]);
           $name = $request->file('image')->getClientOriginalName();
           $path = $request->file('image')->store('public/assets');
           $team = team::find($id);
           $team->name = $request->input('fullname');
           $team->position = $request->input('postion');
           $team->desc = $request->input('desc');
           $team->study_field = $request->input('degree');
           $team->graduation_info = $request->input('graduation');
           $team->experience = $request->input('experience');
           $file = $request->file('image');
           $extenstion = $file->getClientOriginalName();
           $filename = time().'.'.$extenstion;
          $path_file= $file->move('assets/img/team', $filename);
           $team->profile = $path_file;
           $team->update();
           if($team)
           {
               return back()->with('success','File Has been updated successfully in database');
           }
           else
           {
              return back()->with('fail','Something wrong');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $team = team::find($id);
       $team->delete(); 
       if($team)
       {
           return back()->with('success','Data Deleted Successfully');
       }
       else
       {
          return back()->with('fail','Something wrong');
       }
    }
}
