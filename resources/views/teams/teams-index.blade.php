@extends('layouts.master')
@section ('title')

All formula_1_teams
@endsection
@section ('content')
<div class="col-sm-8 blog-main">
    <h1>Teams</h1>

    <ul>
        @foreach($teams as $team)
        <li>
            <h4>{{$team->name}}</h4>
        </li>

        @endforeach
    </ul>
</div>
@endsection
