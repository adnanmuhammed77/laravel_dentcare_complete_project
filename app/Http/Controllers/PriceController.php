<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        return view('admin.priceupload');
    }
    
    public function store(Request $request)
    {
        $price = new Price();
        $price->title = $request->input('title');
        $price->price =$request->input('price');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/services/', $filename);
            $price->image = $filename;
        }
        $price->save();
        return redirect()->back()->with('status','services added successfully');
   
    }
}
