<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style-preset.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <title>@yield('title', 'Painel Administrativo')</title>
    @stack('styles')
</head>

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">

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

    <script src="{{ asset('admin/assets/js/apexcharts.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/js/dashboard-default.js') }}"></script> --}}
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-font.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('admin/assets/js/feather.min.js') }}"></script>
    <script>
        // layout_change('light');
        change_box_container('false');
        layout_rtl_change('false');
        preset_change("preset-1");
        font_change("Public-Sans");
    </script>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @stack('scripts')
</body>

</html>
