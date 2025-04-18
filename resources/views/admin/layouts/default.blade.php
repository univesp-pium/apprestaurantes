<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Painel Administrativo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/default.css') }}">
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body>
    @include('admin.layouts.loader')
    @include('admin.layouts.sidebar')
    @include('admin.layouts.header')
    <div class="pc-container">
        <div class="pc-content">
            @include('admin.layouts.breadcumb')
            @yield('content')
        </div>
    </div>
    @include('admin.layouts.footer')
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/default.js') }}"></script>
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
