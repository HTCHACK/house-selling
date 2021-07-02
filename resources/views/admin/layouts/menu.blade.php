<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('admin.index')}}" class="nav-link">Home</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('force_to_logout') }}" class="nav-link">Logout</a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Hello </a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset('user-logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{route('buildings.index')}}" class="nav-link {{Str::contains(Route::currentRouteName(), 'buildings') ? 'active' : null}}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Building
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('blocks.index')}}" class="nav-link {{Str::contains(Route::currentRouteName(), 'blocks') ? 'active' : null}}">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Blocks
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('etajs.index')}}" class="nav-link {{Str::contains(Route::currentRouteName(), 'etajs') ? 'active' : null}}">
                        <i class="nav-icon fas fa-chart-area"></i>
                        <p>
                            Flour
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('flats.index')}}" class="nav-link {{Str::contains(Route::currentRouteName(), 'flats') ? 'active' : null }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Flats
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('clients.index')}}" class="nav-link {{Str::contains(Route::currentRouteName(), 'clients') ? 'active' : null}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Clients
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sold_flats.index')}}" class="nav-link {{Str::contains(Route::currentRouteName(), 'sold_flats') ? 'active' : null}}">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Saled Flats
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
