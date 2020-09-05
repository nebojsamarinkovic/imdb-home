<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
</head>
 
<body>
 
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/movies">Movies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/create">Add movie</a>
    </li>
     </ul>
</nav>
 
<div class="container">
    @yield('content')
</div>
 
<footer class="modal-footer">
    <div class="container">
        <span class="text-muted">Copyright Movies Database 2020.</span>
    </div>
</footer>
 
<script src="{{ URL::asset('js/app.js') }}">
</body>
</html>
