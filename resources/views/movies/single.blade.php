@extends('layouts.main')

@section('content')
    <h1>{{$title}} ({{$year}})</h1>
    <hr/>
    <div>
    <p>Genre: {{$genre}}</p>
    <p>Director: {{$director}}</p>
    <p>Storyline: {{$storyline}}</p>
    </div>
    <hr />
    <div>
    <h3>Comments</h3>
    @foreach($comments ?? '' as $comment)
      <div class="alert alert-primary">
        {{$comment->content}}
      </div>
    @endforeach
    </div>
@endsection
