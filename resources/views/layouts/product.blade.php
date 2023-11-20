<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <title>{{$movie->title}}</title>
</head>
<body>
    <div class="movie-box" style="background-image: url({{$movie->image}})">
        <div class="movie-txt">
            <h1>titolo</h1>
            <h3>{{$movie->title}}</h3>
            <h1>Titolo Originale</h1>
            <h3>{{$movie->original_title}}</h3>
            <h1>Nazionalita:</h1>
            <h3>{{$movie->nationality}}</h3>
            <h1>Data</h1>
            <h3>{{$movie->date}}</h3>
            <h1>Voto</h1>
            <h3>{{$movie->vote}}</h3>
            <a href="{{route('home')}}">torna indietro</a>
        </div>
    </div>
</body>
</html>
