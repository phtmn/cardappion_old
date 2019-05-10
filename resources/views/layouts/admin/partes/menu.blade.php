
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
        <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('config.createEdit')}}" class="nav-link">
                        <i class="text-success fa fa-cog nav-icon"></i>
                        <p> Perfil</p>
                    </a>
                </li>
            </ul>
           
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link">
                        <i class="text-warning fa fa-star nav-icon"></i>
                        <p>Itens</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('menus.index')}}" class="nav-link">
                        <i class="text-primary fa fa-qrcode nav-icon"></i>
                        <p>Menus</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('promotions.index')}}" class="nav-link">
                        <i class="text-danger fa fa-bullhorn nav-icon"></i>
                        <p>Ofertas</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

