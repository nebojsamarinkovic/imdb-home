<html>
<head>
<title>Single Movie</title>
</head>

<body>
    <h1>{{$movie->title}} ({{$movie->year}})</h1>
    <hr/>
    <div>
    <p>Genre: {{$movie->genre}}</p>
    <p>Director: {{$movie->director}}</p>
    <p>Storyline: {{$movie->storyline}}</p>
    </div>
</body>
</html>