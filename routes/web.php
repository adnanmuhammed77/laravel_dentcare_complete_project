<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Price;
use App\Models\Service;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   $ser = Service::all();
   $price = Price::all();
   $doct = Doctor::all();
  return view('index', compact('ser','price','doct'));
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/appointment', function () {
    $ser = Service::all();
    return view('appointment',compact('ser'));
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/price', function () {
    $price = Price::all();
    return view('price',compact('price'));
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    $doct = Doctor::all();
    return view('team',compact('doct'));
});
Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/userview', function () {
    return view('userview');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/dashboard',[DashboardController::class,'index']);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

//services image upload 
Route::get('/serviceup',[ServiceController::class,'index']);
Route::post('serviceup',[ServiceController::class,'store']);

//Price details

Route::get('/priceup',[PriceController::class,'index']);
Route::post('/priceup',[priceController::class,'store']);

//doctor details

route::get('/doctorup',[DoctorController::class,'index']);
route::post('/doctorup',[DoctorController::class,'store']);

//appointment

Route::post('/appointmentup',[AppointmentController::class,'store']);

//contact details

Route::post('/contactup',[ContactController::class,'store']);

//adminside details

Route::get('/bookingdetails',[DashboardController::class,'BookingDetails']);

Route::get('/contactdetails',[DashboardController::class,'ContactDetails']);
Route::get('/doctordetails',[DashboardController::class,'DoctorDetails']);
Route::get('/servicedetails',[DashboardController::class,'ServiceDetails']);
Route::get('/pricedetails',[DashboardController::class,'PriceDetails']);

