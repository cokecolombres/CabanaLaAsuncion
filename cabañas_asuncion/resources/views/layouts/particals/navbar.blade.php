<header class="header_area">
    <nav class="navbar navbar-expand-lg menu_one menu_four hosting_menu">
        <div class="container">
            <a class="navbar-brand sticky_logo" href="{{url('/')}}"><img src="{{asset('theme/img/6-logo/logo2.png')}}" alt="logo" style="max-width: 200px;"><img src="{{asset('theme/img/6-logo/logo2.png')}}" alt="logo" style="max-width: 120px;"></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav menu w_menu ml-auto">
                    <li class="nav-item dropdown submenu mega_menu mega_menu_two active">
                        <a class="nav-link" href="{{url('/')}}">
                            Inicio
                        </a>
                    </li>
                    <li class="dropdown submenu nav-item">
                        <a class="nav-link" href="{{route('remates')}}">
                            Remates
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('nosotros')}}">
                           Cabaña
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('contacto')}}">
                           Contacto
                        </a>
                    </li>
                @guest
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home')}}">
                                Mi Cuenta
                            </a>                                    
                            {{-- <a class="dropdown-item" href="{{route('list-remates')}}">
                                Remates
                            </a>                                    
                            <a class="dropdown-item" href="{{route('home')}}">
                                Información
                            </a>                                    
                            <a class="dropdown-item" href="#">
                                Perfil
                            </a>                                     --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest                            
                </ul>
            </div>
        </div>
    </nav>
</header>