<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Career;

class JobsController extends Controller
{

    public function index()
    {
        $careers=Career::get();
        return view('career', compact('careers'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|min:5',
            'dob' => 'required',
            'gender' => 'required',
            'nid' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
            'degree' => 'required',
            'major' => 'required',
            'graduation' => 'required',
            'grade' => 'required',
            'experience' => 'required',
            'cv' => 'required|file|mimes:pdf,doc,docx',
            'letters' => 'required|file|mimes:pdf,doc,docx',
           ]);
           $cvname = $request->file('cv')->getClientOriginalName();
           $cvpath = $request->file('cv')->store('public/assets/img/applications');
           $lettername = $request->file('letters')->getClientOriginalName();
           $letterpath = $request->file('letters')->store('public/assets/img/applications');
           $save = new Job;
           $save->fullname = $request->input('fullname');
           $save->dob = $request->input('dob');
           $save->gender = $request->input('gender');
           $save->nid = $request->input('nid');
           $save->email = $request->input('email');
           $save->phone = $request->input('phone');
           $save->province = $request->input('province');
           $save->city = $request->input('city');
           $save->district = $request->input('district');
           $save->degree = $request->input('degree');
           $save->major = $request->input('major');
           $save->graduation = $request->input('graduation');
           $save->grade = $request->input('grade');
           $save->experience = $request->input('experience');
           $file = $request->file('cv');
           $extenstion = $file->getClientOriginalName();
           $filename = time().'.'.$extenstion;
          $path_file= $file->move('public/assets/img/applications', $filename);
           $save->cv = $path_file;

           $fileletter = $request->file('letters');
           $extenstionletter = $fileletter->getClientOriginalName();
           $filenameletter = time().'.'.$extenstionletter;
          $path_files= $fileletter->move('public/assets/img/applications', $filename);
           $save->letters = $path_files;
           $save->save();
           if($save)
           {
               return back()->with('success','Your Application has been successfully recieved');
           }
           else
           {
              return back()->with('fail','Something wrong');
           }
    }

    public function details($id)
    {
        $careers=Career::find($id);
        return view('job-details', compact('careers'));
    }

    public function Show_details()
    {
        return view('job-details');
    }
    


}
