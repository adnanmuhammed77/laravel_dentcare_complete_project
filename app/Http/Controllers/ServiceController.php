<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('admin.servicesupload');
    }
    
    public function store(Request $request)
    {
        $ser = new Service();
        $ser->title = $request->input('title');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/services/', $filename);
            $ser->image = $filename;
        }
        $ser->save();
        return redirect()->back()->with('status','services added successfully');
   
    }
}
