<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <h1>Lista de estrenos 2024</h1>

    @auth
    <a href="{{url('dashboard')}}">Dashboard</a>
    @else
    <a href="{{url('login')}}">Login</a>
    @endauth

    @foreach ($movies as $movie)
    <h1><a href="{{ url('movie', $movie->id ) }}">{{$movie->title}}</a></h1>
    <h2>{{$movie->description}}</h2>
    @endforeach

</body>

</html>