<html lang="uk">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
<link href="{{ asset ('css/header.css') }}" rel="stylesheet"/>
<link href="{{ asset ('css/footer.css') }}" rel="stylesheet"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastro center</title>
</head>
<body>
@include('inc.header')
@yield('content')
@include('inc.footer')
</body>
</html>
