<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand text-primary p-2">
                <img src="{{ asset('admin/assets/images/logo.avif') }}" class="img-fluid logo-lg" alt="logo">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="{{ route('admin.dashboard.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-chart-line"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.orders.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-list"></i>
                        </span>
                        <span class="pc-mtext">Pedidos</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-drumstick-bite"></i>
                        </span>
                        <span class="pc-mtext">
                            Produtos
                        </span>
                        <span class="pc-arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a class="pc-link" href="#">
                                Produtos
                            </a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="#">
                                Categorias
                            </a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="#">
                                Receitas
                            </a>
                        </li>
                        <li class="pc-item">
                            <a class="pc-link" href="#">
                                Instruções
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="pc-mtext">Configurações</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
