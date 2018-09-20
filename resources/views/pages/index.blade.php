@extends('layouts.app')

@section('content')

    <main role="main" class="container">
        <div class="jumbotron">
            <h1>{{$title}}</h1>
            <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
            <a class="btn btn-lg btn-primary" href="#" role="button">Login</a>
            <a class="btn btn-lg btn-primary" href="#" role="button">Register</a>
        </div>
    </main>

@endsection





