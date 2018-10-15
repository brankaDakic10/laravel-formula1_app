@extends('layouts.master')

@section ('title')

{{$new->title}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
    <div class="card-body">
        <h4 class="text-center">{{$new->title}}</h4>
        <br><br>
        <p>@if($new->user)
            <i>Author:<a href="#">by {{$new->user->name}}</a> </i>
            @endif
        </p>
        <p class="card-text">{{$new->content}}</p>
    </div>

    
</div>


@endsection
