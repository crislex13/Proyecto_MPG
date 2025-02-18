<aside class="left-side sidebar-offcanvas">
    <!-- barra lateral: el estilo se puede encontrar en la barra lateral -->
    <section class="sidebar">
        <div id="menu" role="navigation">
            <div class="nav_profile">
                <div class="media profile-left">
                    <a class="pull-left profile-thumb" href="#">
                        <img src="img/authors/avatar1.jpg" class="img-circle" alt="Imagen de usuario">
                    </a>
                    <div class="content-profile">
                        <h4 class="media-heading">Wilber Arango</h4>
                        <span class="text-default">Admin</span>
                    </div>
                </div>
            </div>
            <ul class="navigation">
                <li>
                    <a href="{{ url('/home') }}">
                        <i class="text-primary menu-icon fa fa-dashboard"></i>
                        <span class="mm-text">Panel de Control</span>
                    </a>
                </li>
                <li>
                    <a href='{{ route('clients.index')}}'>
                        <i class="text-primary menu-icon fa fa-briefcase"></i>
                        <span class="mm-text">Clientes</span>
                    </a>
                </li>

                <li class="menu-dropdown">
                    <a href="#">
                        <i class="text-primary menu-icon fa fa-user"></i>
                        <span class="mm-text">Usuarios</span>
                        <span class="fa fa-angle-down pull-right"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href='{{ route('users.index')}}'>
                                <i class="text-primary fa fa-fw fa-users"></i> Lista de Usuarios
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href='{{ route('roles.index')}}'>
                        <i class="text-primary menu-icon fa fa-users"></i>
                        <span class="mm-text">Roles</span>
                    </a>
                </li>
                <li>
                    <a href='{{ route('permissions.index')}}'>
                        <i class="text-primary menu-icon fa fa-key"></i>
                        <span class="mm-text">Permisos</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</aside>