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
    @if(isset($genres))
        <h1 style="margin: 50px auto; width: 100px">{{$genres->genre_name}}</h1>
        <div class="row">
        @foreach($genres->movies as $movie)
            <div class="col-3">
                <h2>{{$movie->title}}</h2>
                <img src="http://localhost/New_Gastrocenter/public/{{$movie->poster_path}}" style="height: 240px; length: 120px">
                <br>
                <span>{{$movie->release_date}}</span>
                <br>
                <span>{{$movie->runtime}}</span>
                <br>
                <span>{{$movie->rating}}</span>
            </div>
        @endforeach
        </div>
    @endif
</div>



</body>
</html>
