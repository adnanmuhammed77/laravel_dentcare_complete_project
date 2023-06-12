<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        return view('admin.doctorupload');
    }

    public function store(Request $request)
    {
        $doc = new Doctor();
        $doc->name = $request->input('name');
        $doc->category = $request->input('category');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/services/', $filename);
            $doc->image = $filename;
        }
        $doc->save();
        return redirect()->back()->with('status','services added successfully');
        
    }
}
