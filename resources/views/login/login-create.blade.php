@extends('layouts.master')
@section('title')
Login
@endsection
@section('content')
<div class="col-sm-8 blog-main">
    <h3>Login</h3>
    <form action="/login" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control">
            @include('partials.error-message',['fieldTitle'=>'email'])
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">
            @include('partials.error-message',['fieldTitle'=>'password'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>
@endsection
