@extends('layouts.master')
@section ('title')
 
All news
@endsection

@section ('content')
<div class="col-sm-8 blog-main">
<h3 class="text-center">Formula One news</h3>
         
<div class="card">
@foreach($news as $new)
<div class="card-body">
    <h4 class="card-text">Title: {{$new->title}}</h4>
    <p class="card-text">{{$new->content}}</p>

</div>

@endforeach

</div>

</div>

@endsection