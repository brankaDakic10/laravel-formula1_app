@extends('layouts.master')
@section ('title')

All formula_1_teams
@endsection
@section ('content')
<div class="col-sm-8 blog-main">
    <h4>List of teams</h4>

    <ul>
        @foreach($teams as $team)
        <li>
            <h5><a href="{{route('team',['id'=>$team->id])}}">{{$team->name}}</a></h5>
        </li>

        @endforeach
    </ul>
</div>
@endsection
