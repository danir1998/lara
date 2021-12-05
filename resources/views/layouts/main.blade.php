<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <script src="js/app.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('post.index') }}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.create') }}">Создать</a>
            </li>
        </ul>

        @yield('content')
    </div>
</body>
</html>
