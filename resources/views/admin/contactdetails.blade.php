@extends('layouts.master')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">subject no</th>
      <th scope="col">message</th>

    </tr>
  </thead>
  <tbody>
  @foreach($cont as $post)
    <tr>  
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->name}}</td>
      <td>{{$post->email}}</td>
      <td>{{$post->subject}}</td>
      <td>{{$post->messsage}}</td>
    </tr>
   @endforeach
  </tbody>
</table>

@endsection