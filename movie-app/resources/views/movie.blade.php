<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>

<h1>{{$movie->title}}</h1>
<p>{{$movie->director}}</p>

<h2>{{$movie->company ?? 'ACME'}}</h2>
    
</body>
</html>