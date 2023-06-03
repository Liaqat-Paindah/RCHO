<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Images=Image::paginate(9);
        $Images02=Image::where('fields','projects')->paginate(9);
        $events=Image::where('fields','events')->paginate(9);
        $trainings=Image::where('fields','trainings')->paginate(9);
        $employees=Image::where('fields','employees')->paginate(9);
        return view('gallary', compact('Images','Images02','events', 'trainings', 'employees'));
    }

    public function list()
    {
        $images=Image::orderBy('id', 'DESC')->paginate(10);
        $count=Image::count();
        return view('admin.img_list', compact('images', 'count'));
    }

    public function create()
    {
        return view('admin.add_image');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png',
    
           ]);
           $name = $request->file('file')->getClientOriginalName();
           $path = $request->file('file')->store('public/assets');
           $save = new Image;
           $save->name = $request->input('name');
           $save->fields = $request->input('field');
           $file = $request->file('file');
           $extenstion = $file->getClientOriginalName();
           $filename = time().'.'.$extenstion;
          $path_file= $file->move('assets/img/gallary', $filename);
           $save->image = $path_file;
           $save->save();
           return back()->with('status', 'File Has been uploaded successfully in database');
        }

    public function show(image $image)
    {
        //
    }

    public function edit($id)
    {
        $image = Image::find($id);
        return view('admin.img_edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5',
            'fields' => 'required',
            'image' => 'required|file|mimes:jpg,jpeg,png',
           ]);
           $name = $request->file('image')->getClientOriginalName();
           $path = $request->file('image')->store('public/assets');
           $image = Image::find($id);
           $image->name = $request->input('name');
           $image->fields = $request->input('fields');
           $file = $request->file('image');
           $extenstion = $file->getClientOriginalName();
           $filename = time().'.'.$extenstion;
          $path_file= $file->move('assets/img/gallary', $filename);
           $image->image = $path_file;
           $image->update();
           if($image)
           {
               return back()->with('success','File Has been updated successfully in database');
           }
           else
           {
              return back()->with('fail','Something wrong');
           }
    }
    public function delete($id)
    {
        $image = Image::find($id);
        $image->delete(); 
        if($image)
        {
            return back()->with('success','Image Deleted Successfully');
        }
        else
        {
           return back()->with('fail','Something wrong');
        }
    }
}
