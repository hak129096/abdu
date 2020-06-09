@extends('layout')
@section('title')
  JzeePage
@endsection
  @section("content")
  <h1>Js Page</h1>
  	@foreach($data as $value) 
  <li>{{$value}}</li>
    @endforeach　
  @endsection
