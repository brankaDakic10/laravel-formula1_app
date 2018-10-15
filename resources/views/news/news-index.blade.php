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
        <h4 class="card-text">Title:<a href="{{route('new',['id'=>$new->id])}}"> {{$new->title}}</a></h4>
        <p class="card-text">{{$new->content}}</p>

    </div>

    @endforeach

    </div>
    <nav class="blog-pagination">
      <a class="btn btn-outline-{{$news->currentPage()== 1? 'secondary disabled':'primary'}}" href="{{$news->previousPageUrl()}}">Previous</a>
      <a class="btn btn-outline-{{$news->hasMorePages()== 1? 'primary':'secondary disabled'}}" href="{{$news->nextPageUrl()}}">Next</a>
   </nav>
    </div>

    @endsection