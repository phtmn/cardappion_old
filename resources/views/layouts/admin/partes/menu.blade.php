<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
                <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('config.createEdit')}}">
                            <i class="ni ni-settings text-info"></i>
                            <span class="nav-link-text">Configurações</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products.index')}}">
                            <i class="ni ni-chart-pie-35 text-info"></i>
                            <span class="nav-link-text">Itens</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menus.index')}}">
                            <i class="ni ni-calendar-grid-58 text-red"></i>
                            <span class="nav-link-text">Menus</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('promotions.index')}}">
                            <i class="ni ni-notification-70 text-primary"></i>
                            <span class="nav-link-text">Promoções</span>
                        </a>
                    </li>
                </ul>
                <hr class="my-3">
                
            </div>
        </div>
    </div>
</nav>