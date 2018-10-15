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
    <nav class="blog-pagination">
      <a class="btn btn-outline-{{$teams->currentPage()== 1? 'secondary disabled':'primary'}}" href="{{$teams->previousPageUrl()}}">Previous</a>
      <a class="btn btn-outline-{{$teams->hasMorePages()== 1? 'primary':'secondary disabled'}}" href="{{$teams->nextPageUrl()}}">Next</a>
   </nav>
</div>
@endsection
