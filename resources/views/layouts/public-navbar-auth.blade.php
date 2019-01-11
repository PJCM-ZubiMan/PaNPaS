
        {{-- Navigation --}}
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ route('index') }}" title="{{ config('app.name', 'PaNPaS') }} logo - inicio de la aplicación">{{ config('app.name', 'PaNPaS') }}</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item p-2">
                            <a class="nav-link js-scroll-trigger center" href="#services" title="Ir a la sección de Servicios">Seguidos<br>{{count(Auth::user()->follows)}}</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link js-scroll-trigger center" href="#recetas" title="Ir a la sección de Recetas" ">Seguidores<br>0</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link js-scroll-trigger center" href="#ranking" title="Ir a la sección de Ranking">Ranking</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link js-scroll-trigger center" href="#clients" title="Ir a la sección de Clientes">Recetas</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link js-scroll-trigger center" href="#contact" title="Ir a la sección de Contacto">Contacto</a>
                        </li>
                        {{--
                            Deberá ser un DropdownMenu con las opciones de:
                                >> ir al escritorio/dashboard del usuario
                                >> cerrar sesión
                                >> ¿alguna más?
                        --}}
                        <li class="nav-item p-3">
                            <a class="btn btn-primary text-uppercase js-scroll-trigger" href="" data-target="#registerModal" data-toggle="modal" title="Crear cuenta de usuario"><img src="{{Auth::user()->avatar}}" class="fa fa-user" style="width: 23px; height: 23px; margin-right: 10px;"> {{Auth::user()->username}}</a>
                        </li>
                         <li class="nav-item p-3">
                            <a class="btn btn-primary text-uppercase js-scroll-trigger" href="{{route('user_panel_logout')}}"title="Cerrar Sesión"><i class="fa fa-sign-out" style="font-size:36px"></i> Logout</a>
                        </li>
                         <li class="nav-item p-3" style="background-color: red">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>