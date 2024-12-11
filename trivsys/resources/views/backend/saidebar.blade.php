@section('sidebar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
            <img src="{{ asset('storage/img/Untitled-1-removebg-preview.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">PBS Digital</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <span class="d-block ms-5 text-white">Hello {{ Auth::user()->name }} </span>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{ route('dashboard') }}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                        <li class="nav-item">
                            <a href="{{ route('viewPortfolio') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-users"></i>
                                <p>
                                    Portfolio
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('viewClientTable') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-users"></i>
                                <p>
                                    Client Request
                                </p>
                            </a>
                        </li>
                   
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-gear"></i>
                                <p>
                                    Settings
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('viewGeneralSetting') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Setting</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Change Password</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                 

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection
