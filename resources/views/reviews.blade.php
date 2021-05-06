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

    @if(isset($movies))
        <h1 style="max-width: 300px; margin: 50px auto">{{$movies->title}}</h1>
        <div class="row">
                <div class="col-3">
                    <h2>{{$movies->title}}</h2>
                    <img src="http://localhost/New_Gastrocenter/public/{{$movies->poster_path}}" style="height: 240px; length: 120px">
                    <br>
                    <span>{{$movies->release_date}}</span>
                    <br>
                    <span>{{$movies->runtime}}</span>
                    <br>
                    <span>{{$movies->rating}}</span>
                </div>
            <div class="col-9">
                @foreach($movies->reviews as $review)
                    <div style="margin: 25px">
                        <span>{{$review->username}}</span>
                        <br>
                        <span>{{$review->created_at}}</span>
                        <br>
                        <span>{{$review->review}}</span>
                    </div>

                @endforeach
            </div>
        </div>
    @endif
</div>



</body>
</html>
