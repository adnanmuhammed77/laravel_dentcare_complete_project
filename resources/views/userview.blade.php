@extends('base')

@section('content')
<style>
  .btn{
    margin-left:10px;
  }
</style>

@include('header') 

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<a type="button" href="/" class="btn btn-primary btn-lg ">Back</a>


@endsection