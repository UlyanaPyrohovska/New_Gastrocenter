<html lang="uk">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset ('css/app.css') }}" rel="stylesheet"/>
    <title>Gastro center</title>
</head>
<body>
<div class="container">
    <h1 style="width: 100px; margin: 50px auto">Movies</h1>
    @if(isset($movies))
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-3">
                    <h2>{{$movie->title}}</h2>
                    <img src="{{$movie->poster_path}}" style="height: 240px; length: 120px">
                    <br>
                    <span>{{$movie->release_date}}</span>
                    <br>
                    <span>{{$movie->runtime}}</span>
                    <br>
                    <span>{{$movie->rating}}</span>
                    <ul>
                        @foreach($movie->genres as $genre)
                            <li>
                                <a href="genres/{{$genre->id}}">{{$genre->genre_name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <a href="reviews/{{$movie->id}}">Reviews({{count($movie->reviews)}})</a>
                </div>
            @endforeach
        </div>
    @endif
</div>



</body>
</html>
