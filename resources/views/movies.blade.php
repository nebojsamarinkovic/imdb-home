<html>
<head>
<title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    <div>
    @foreach ($movies as $movie)
    <div>
        <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
        <p>{{$movie->storyline}}</p>
    </div>
    @endforeach
    </div>
</body>
</html>