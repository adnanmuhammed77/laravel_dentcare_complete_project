@extends('layouts.master')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">image</th>
    
     
    </tr>
  </thead>
  <tbody>
  @foreach($service as $post)
    <tr>  
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->image}}</td>
      <td><button type="button" class="btn btn-success">edit</button>
     <button type="button" class="btn btn-danger">delete</button>
    </td>
    </tr>
   @endforeach
  </tbody>
</table>

@endsection