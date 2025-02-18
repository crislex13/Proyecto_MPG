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
                        <h4 class="media-heading">Nataliapery</h4>
                        <span class="text-default">Admin</span>
                    </div>
                </div>
            </div>
            <ul class="navigation">
                <li class="{{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ url('/home') }}">
                        <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
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
                        <i class="text-default menu-icon fa fa-fw fa-users"></i>
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
                        <li class="{{ request()->is('admin_userprofile') ? 'active' : '' }}">
                            <a href="admin_userprofile.html">
                                <i class="text-success fa fa-fw fa-user"></i> Perfil de Usuario
                            </a>
                        </li>
                        <li class="{{ request()->is('add_users') ? 'active' : '' }}">
                            <a href="add_users.html">
                                <i class="text-info fa fa-fw fa-user"></i> Agregar Usuarios
                            </a>
                        </li>
                        <li class="{{ request()->is('admin_userpayment') ? 'active' : '' }}">
                            <a href="admin_userpayment.html">
                                <i class="text-danger fa fa-fw fa-money"></i> Pagos
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href='admin_coupon.html'>
                        <i class="text-primary menu-icon fa fa-scissors"></i>
                        <span class="mm-text">Cupones</span>
                    </a>
                </li>
                <li class="menu-dropdown">
                    <a href="#">
                        <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                        <span class="mm-text">Galería</span>
                        <span class="fa fa-angle-down pull-right"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href='add_gallery.html'>
                                <i class="text-primary fa fa-fw fa-cloud-upload"></i> Agregar Galería
                            </a>
                        </li>
                        <li>
                            <a href='gallery.html'>
                                <i class="text-success fa fa-fw fa-file-image-o"></i> Galería
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href='admin_timings.html'>
                        <i class="text-info menu-icon fa fa-fw fa-clock-o"></i>
                        <span class="mm-text">Calendario de Clases</span>
                    </a>
                </li>
                <li>
                    <a href='admin_login.html'>
                        <i class="text-danger menu-icon fa fa-sign-in"></i>
                        <span class="mm-text">Iniciar Sesión</span>
                    </a>
                </li>
                <li>
                    <a href='404.html'>
                        <i class="text-warning menu-icon fa fa-anchor"></i>
                        <span class="mm-text">Error 404</span>
                    </a>
                </li>
                <li>
                    <a href='blank.html'>
                        <i class="text-default menu-icon fa fa-file-o"></i>
                        <span class="mm-text">Página en Blanco</span>
                    </a>
                </li>
                <li class="menu-dropdown">
                    <a href="#">
                        <i class="text-primary menu-icon fa fa-sitemap"></i>
                        <span class="mm-text">Niveles de Menú</span>
                        <span class="fa fa-angle-down pull-right"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <i class="text-primary fa fa-fw fa-sitemap"></i> Nivel 1
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="#">
                                        <i class="text-primary fa fa-fw fa-sitemap"></i> Nivel 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-dropdown">
                    <a href="#">
                        <i class="text-success menu-icon fa fa-fw fa-question-circle"></i>
                        <span class="mm-text">Preguntas Frecuentes</span>
                        <span class="fa fa-angle-down pull-right"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href='faq.html'>
                                <i class="text-primary fa fa-fw fa-question-circle"></i> Preguntas Frecuentes
                            </a>
                        </li>
                        <li>
                            <a href='add_faq.html'>
                                <i class="text-success fa fa-fw fa-question"></i> Agregar Preguntas Frecuentes
                            </a>
                        </li>
                    </ul>
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