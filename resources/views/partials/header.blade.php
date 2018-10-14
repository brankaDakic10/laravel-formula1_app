<div class="blog-masthead header-nba">
      <div class="container">
        <nav class="nav blog-nav">
        <a class="nav-link active" href="/">Home</a>
         
         

    
     @if(Auth::check())
        <div class="nav-link">User : {{Auth()->user()->name}}</div>
        <a class="nav-link"  href="/logout">Logout</a>
        @else
        <a class="nav-link" href="/login">Login</a>
        <a class="nav-link" href="/register">Register</a>
     @endif
        </nav>
      </div>
    </div>
     <div class="blog-header">
      <div class="container">
        <h2 class="text-center">Formula One World Champions</h2> 
 
         <p class="lead blog-description text-center">An example template </p>
      </div>
    </div> 