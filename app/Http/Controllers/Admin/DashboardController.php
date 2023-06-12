<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Price;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
        
    }

    public function BookingDetails(){
        $book = Appointment::all();
        return view('admin.bookingdetails',compact('book'));
    }

    public function ContactDetails(){
        $cont = Contact::all();
        return view('admin.contactdetails',compact('cont'));
    }

    public function DoctorDetails(){
        $doc = Doctor::all();
        return view('admin.doctordetails',compact('doc'));
    
    }
    public function ServiceDetails(){
        $service =Service::all();
        return view('admin.servicedetails',compact('service'));
    
    }
    public function PriceDetails(){
        $pri =Price::all();
        return view('admin.pricedetails',compact('pri'));
    
    }

}


