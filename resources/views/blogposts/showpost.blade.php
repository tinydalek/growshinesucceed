@extends('layouts.layout')

@section('content')

    <div>
        
        <h1>{{ $blogpost->title }}</h1>

            <p>{{ $blogpost->body }}</p>

            <p>Posted by: {{ $blogpost->author }} on {{ $blogpost->published_on }}</p>

    </div>

@endsection