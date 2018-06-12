<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-success">{{--class="main-sidebar sidebar-dark-primary elevation-4"> Dark theme --}}
    <!-- Brand Logo -->
    <a href="{{url('home')}}" class="brand-link bg-success"> {{--class="brand-link"> Dark theme --}}
        <img src="{{asset('img/carma-logo.svg')}}" alt="Carma Logo" class="brand-image"
             style="opacity: .8">
        <span class="brand-text font-weight-light">
                 <img src="{{asset('img/lema.svg')}}" alt="Si te pesan los pies... Nuestros autos son para ti..." style="width: 8em; height: 3em;">
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('category')}}" class="nav-link">
                                <i class="fa fa-th nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-car nav-icon"></i>
                                <p>Vehiculos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-truck nav-icon"></i>
                                <p>Fabricantes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-handshake-o nav-icon"></i>
                                <p>Compradores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-users nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>