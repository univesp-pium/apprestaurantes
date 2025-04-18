<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Painel Administrativo do Açougue Premium">
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
    <script>
        $('.btn-danger').click(function(e) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            e.preventDefault();
            Swal.fire({
                title: 'Tem certeza?',
                text: "Você tem certeza que deseja deletar o registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
    <script src="{{ asset('admin/assets/js/default.js') }}"></script>
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
