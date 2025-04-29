<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand text-primary p-2">
                <img src="{{ asset('assets/client-panel/images/logo.webp.blur.webp') }}"
                    data-src="{{ asset('assets/client-panel/images/logo.webp') }}" class="img-fluid logo-lg lazyload"
                    alt="logo" loading="lazy">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="{{ route('client-area.dashboard.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-chart-line"></i>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('client-area.orders.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-list"></i>
                        </span>
                        <span class="pc-mtext">Pedidos</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('client-area.addresses.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </span>
                        <span class="pc-mtext">Endereços</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
