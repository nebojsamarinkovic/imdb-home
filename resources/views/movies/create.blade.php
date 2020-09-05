@extends('layouts.main')
@section('title', 'Create post')

@section('content')


  <form method="POST" action="/movies">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control " id="title" name="title">
      @if($errors->first('title'))
        <div class="alert alert-danger">
          {{$errors->first('title')}}
        </div>
      @endif
    </div>

    <div class="form-group">
      <label for="genre">Genre</label>
      <input class="form-control" id="genre" rows="3" name="genre"></input>
      @if($errors->first('genre'))
        <div class="alert alert-danger">
          {{$errors->first('genre')}}
        </div>
      @endif
    </div>

    <div class="form-group">
      <label for="director">Director</label>
      <input class="form-control" id="gedirector" rows="3" name="director"></input>
      @if($errors->first('director'))
        <div class="alert alert-danger">
          {{$errors->first('director')}}
        </div>
      @endif
    </div>

    <div class="form-group">
      <label for="Year">Year</label>
      <input class="form-control" id="year" rows="3" name="year"></input>
      @if($errors->first('year'))
        <div class="alert alert-danger">
          {{$errors->first('year')}}
        </div>
      @endif
    </div>

    <div class="form-group">
      <label for="storyline">Storyline</label>
      <textarea class="form-control" id="storyline" rows="3" name="storyline"></textarea>
      @if($errors->first('storyline'))
        <div class="alert alert-danger">
          {{$errors->first('storyline')}}
        </div>
      @endif
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>


@endsection 