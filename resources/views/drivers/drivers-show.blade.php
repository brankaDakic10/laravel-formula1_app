@extends('layouts.master')

@section ('title')
 
{{$driver->name}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
<h3>Driver information</h3>
<hr>
<div class="card">
  <img class="card-img-top" src="{{$driver->imageUrl}}" alt="Card image cap" height="300" width="400">
  <h4>Driver name: {{$driver->first_name}} {{$driver->last_name}}</h4>

  <div class="card-body">
    <p class="card-text">Nationality: {{$driver->nationality}}</p>
    <p class="card-text">Email: {{$driver->email}}</p>
    <p class="card-text">Team:<a href="{{ route('team',['id'=> $driver->team->id]) }}"> {{$driver->team->name}}</a></p>

  </div>
</div>

</div>
@endsection