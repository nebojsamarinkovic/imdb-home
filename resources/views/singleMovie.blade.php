@extends('layouts.main')

@section('content')
    <h1>{{$movie->title}} ({{$movie->year}})</h1>
    <hr/>
    <div>
    <p>Genre: {{$movie->genre}}</p>
    <p>Director: {{$movie->director}}</p>
    <p>Storyline: {{$movie->storyline}}</p>
    </div>
@endsection
