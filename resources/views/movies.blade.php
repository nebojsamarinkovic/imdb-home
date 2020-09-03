@extends('layouts.main')

@section('content')
    @foreach ($movies as $movie)
    <div>
        <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
        <p>{{$movie->storyline}}</p>
    </div>
    @endforeach
    
@endsection
    
