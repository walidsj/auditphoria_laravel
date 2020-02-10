<nav id="navbar-sticky" class="navbar navbar-sticky navbar-expand-lg navbar-light"
@if (Request::url() !== route('welcome'))
   style="top: 0px" 
@endif
>
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="assets/img/logo-depan.png" alt="{{ config('app.name') }}">
                <span>{{ config('app.name') }}</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#StickyNavbarContent" aria-controls="StickyNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse-sticky" id="StickyNavbarContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li id="menu_tentang" class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    @else
                <li class="nav-item {{ (Request::url() === route('home')) ? "active":""}}">
                    <a class="nav-link" href="{{ route('home') }}">Dashboard</span></a>
                    </li>
                    @endguest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Info Lomba
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('lomba_cfp') }}">Call for Paper</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('lomba_audit') }}">Lomba Audit</a>
                        </div>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                        <li id="menu_tentang" class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                    </li>
                    <li class="nav-item">
                                <a class="btn btn-outline-danger my-0" href="{{ route('login') }}">Masuk</a>
                    </li>
                    @else
                        <li class="nav-item">
                        <a class="nav-link" href="">Panduan</a>
                    </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle mr-1"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{-- route('changepassword') --}}">Ubah Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-power-off"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>