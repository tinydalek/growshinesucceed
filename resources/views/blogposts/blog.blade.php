@extends('layouts.layout')

@section('content')

<h1>This is the Blog Posts page!</h1>

    @foreach ($blogposts as $blogpost)

        <div>

            <h2> 
            
                <a href=" {{ action('BlogPostsController@show', [$blogpost->id] )}} "> {{ $blogpost->title }} </a> 
            
            </h2>

            <p>{{ $blogpost->body }}</p>

            <p>Posted by: {{ $blogpost->author }} on {{ $blogpost->published_on }}</p>

        </div>

    @endforeach

@endsection