<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Painel Administrativo')</title>
    @stack('styles')
</head>

<body>
    <main>
        @yield('content')
    </main>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @stack('scripts')
</body>

</html>
