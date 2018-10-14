@extends('layouts.master')

@section ('title')

{{$team->name}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
    <h3>Team name:  {{$team->name}}</h3>
    <p>Address:  {{$team->address}}</p>
    <p>Country:  {{$team->country}}</p>



<hr>
<h4>Players:</h4>
<ul>  

      
@foreach($team->drivers as $driver)
<li>{{$driver->first_name}} {{$driver->last_name}}</li>
@endforeach
</ul>
</div>

@endsection
