@extends('layouts.master')

@section('content')

<form action="{{ url('priceup') }}" method="post" enctype="multipart/form-data">
@csrf
                  
     <div class="row mt-4 px-4">
 
             <div class="col-md-12">
                            <div class="row">
                            <div class="col-md-3 form-group">
                                <label>Title:</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" name="title" class="form-control"/>
                            </div> 
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-md-3 form-group">
                                <label>Price</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" name="price" class="form-control"/>
                            </div> 
                            </div>
                            <br>


                            <div class="row">
                            <div class="col-md-3 form-group">
                                <label>image Upload</label>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="file" name="image" class="form-control"/>
                            </div> 
                            </div>
                            
                            <div class="col-md-5 px-4 form-group">
                            <button type="submit" class="btn btn-success">Save</button>
                            </div>
            </div>
    </div>
                  
 </form>

@endsection