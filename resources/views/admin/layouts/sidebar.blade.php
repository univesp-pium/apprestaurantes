<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand text-primary p-2">
                <img src="{{ asset('assets/admin/images/logo.avif') }}" class="img-fluid logo-lg" alt="logo">
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
                    <a href="#" class="pc-link">
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
                        <li class="pc-item {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}">
                            <a class="pc-link" href="{{ route('admin.products.index') }}">
                                Produtos
                            </a>
                        </li>
                        <li class="pc-item {{ Route::currentRouteName() == 'admin.units.index' ? 'active' : '' }}">
                            <a class="pc-link" href="{{ route('admin.units.index') }}">
                                Unidades
                            </a>
                        </li>
                        <li class="pc-item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}">
                            <a class="pc-link" href="{{ route('admin.categories.index') }}">
                                Categorias
                            </a>
                        </li>
                        <li class="pc-item {{ Route::currentRouteName() == 'admin.recipes.index' ? 'active' : '' }}">
                            <a class="pc-link" href="{{ route('admin.recipes.index') }}">
                                Receitas
                            </a>
                        </li>
                        <li
                            class="pc-item {{ Route::currentRouteName() == 'admin.instructions.index' ? 'active' : '' }}">
                            <a class="pc-link" href="{{ route('admin.instructions.index') }}">
                                Instruções
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="pc-mtext">Configurações</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
