@extends('layout')
  @section("content")
  <h1>php Page</h1>
 　	@foreach($data as $value) 
  <li>{{$value}}</li>
    @endforeach　

  @endsection
