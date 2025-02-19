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
                <li class="{{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ url('/home') }}">
                        <i class="text-primary menu-icon fa fa-dashboard"></i>
                        <span class="mm-text">Panel de Control</span>
                        @if(request()->is('home'))
                            <span class="arrow"></span>
                        @endif
                    </a>
                </li>
                <li class="{{ request()->is('clients*') ? 'active' : '' }}">
                    <a href="{{ route('clients.index') }}">
                        <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>

                        <span class="mm-text">Clientes</span>
                        @if(request()->is('clients*'))
                            <span class="arrow"></span>
                        @endif
                    </a>
                </li>
                <li class="menu-dropdown {{ request()->is('users*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="text-primary menu-icon fa fa-user"></i>
                        <span class="mm-text">Usuarios</span>
                        <!-- Cambiar la flecha según la ruta -->
                        <span class="fa fa-angle-down pull-right {{ request()->is('users*') ? 'rotate' : '' }}"></span>
                    </a>
                    <ul class="sub-menu {{ request()->is('users*') ? 'show' : '' }}">
                        <li class="{{ request()->is('users') ? 'active' : '' }}">
                            <a href="{{ route('users.index') }}">
                                <i class="text-primary fa fa-fw fa-users"></i> Lista de Usuarios
                                @if(request()->is('users*'))
                                    <span class="arrow"></span>
                                @endif
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Seleccionamos todos los elementos <li> dentro del menú
        let menuItems = document.querySelectorAll("li");

        // Recorremos los elementos y les agregamos un evento de clic
        menuItems.forEach(item => {
            item.addEventListener("click", function () {
                // Removemos la clase 'active' de todos los elementos
                menuItems.forEach(el => el.classList.remove("active"));

                // Agregamos la clase 'active' al elemento clickeado
                this.classList.add("active");

                // Opcional: Guardar en localStorage para recordar la selección después de recargar
                localStorage.setItem("activeMenu", this.innerHTML);
            });
        });

        // Recuperar el elemento activo al recargar la página
        let savedMenu = localStorage.getItem("activeMenu");
        if (savedMenu) {
            menuItems.forEach(el => {
                if (el.innerHTML === savedMenu) {
                    el.classList.add("active");
                }
            });
        }
    });
</script>