<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class AppointmentController extends Controller
{
    public function store(Request $request){
        $data = new Appointment();
        $data->service = $request->input('service');
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->date = $request->input('date');
        $data->save();

        return redirect('userview')->with('success', '<h1>Well Done</h1> <br> Your Appointment has successfully completed');

    }
}
