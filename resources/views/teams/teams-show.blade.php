@extends('layouts.master')

@section ('title')

{{$team->name}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
    <h3>Team name: {{$team->name}}</h3>
    <p>Address: {{$team->address}}</p>
    <p>Country: {{$team->country}}</p>



    <hr>
    <h4>Players:</h4>
    <ul>


        @foreach($team->drivers as $driver)
        <li><a href="{{route('driver',['id'=>$driver->id])}}">{{$driver->first_name}} {{$driver->last_name}}</a></li>
        @endforeach
    </ul>
<!-- add comment on team -->
    <hr>
    <form action="{{route('comments-team',['team_id'=>$team->id])}}" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <label for="content">Molimo unesite komentar:</label>

            <textarea class="form-control" id="content" name="content"></textarea>
            @include('partials.error-message',['fieldTitle'=>'content'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <!-- // show comments -->
    @if(count($team->comments))
    <hr>
    <h5>Comments:</h5>
    <ul class="list-group">
        @foreach($team->comments as $comment)
            <p>Content: {{$comment->content}} </p>
        @endforeach
    </ul>
    @endif

</div>

@endsection
