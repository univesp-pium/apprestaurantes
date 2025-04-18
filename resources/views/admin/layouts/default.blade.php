<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Painel Administrativo do Açougue Premium">
    <title>@yield('title', 'Painel Administrativo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    @vite('public/admin/assets/css/default.css')
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
    @vite('public/admin/assets/js/popper.min.js')
    @vite('public/admin/assets/js/bootstrap.min.js')
    @vite('public/admin/assets/js/default.js')
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
