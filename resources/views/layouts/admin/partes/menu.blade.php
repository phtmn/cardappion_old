<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-plus"></i><p>Cadastros<i class="right fa fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link">
                        <i class="fa fa-group nav-icon"></i>
                        <p>Produtos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('menus.index')}}" class="nav-link">
                        <i class="fa fa-group nav-icon"></i>
                        <p>Menus</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open ">
            <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-bar-chart "></i><p>Promoções<i class="right fa fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('promotions.index')}}" class="nav-link">
                        <i class="fa fa-dollar nav-icon"></i>
                        <p>Lista</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open ">
            <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-bar-chart "></i><p>Preferencias<i class="right fa fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('config.createEdit')}}" class="nav-link">
                        <i class="fa fa-gears nav-icon"></i>
                        <p>Meus Dados</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>