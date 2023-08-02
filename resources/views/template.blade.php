<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Proyecto web</title>
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home')}}">
                    <img src="{{ asset('images/tortuga-marina.png') }}" alt="tortuga" class="h-12">
                </a>

                <form action="">
                    <input type="text" placeholder="Buscar...">
                </form>
            </div>
            
            <!--Verificar si esta iniciado session-->
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth

        </header>
        @yield('content')
    </div>

</body>
</html>