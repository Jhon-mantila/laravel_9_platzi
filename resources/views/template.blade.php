<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
</head>
<body>
<ul>
    <li><a href="{{ route('home')}}">Home</a></li>
    <li><a href="{{ route('blog')}}">Blog</a></li>
    <!--Verificar si esta iniciado session-->
    @auth
        <a href="{{ route('dashboard') }}">Dashboard</a>
    @else
    <a href="{{ route('login') }}">Login</a>
    @endauth
</ul>
    <hr>
    @yield('content')
</body>
</html>