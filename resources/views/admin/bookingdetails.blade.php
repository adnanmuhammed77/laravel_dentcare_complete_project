@extends('layouts.master')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">service</th>
      <th scope="col">name</th>
      <th scope="col">phone no</th>
      <th scope="col">date</th>

    </tr>
  </thead>
  <tbody>
  @foreach($book as $post)
    <tr>  
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->service}}</td>
      <td>{{$post->name}}</td>
      <td>{{$post->phone}}</td>
      <td>{{$post->date}}</td>
    </tr>
   @endforeach
  </tbody>
</table>

@endsection