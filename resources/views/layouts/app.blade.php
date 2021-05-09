<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>

    <style>
        nav a.active {
            color: red;
        }
    </style>

</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>