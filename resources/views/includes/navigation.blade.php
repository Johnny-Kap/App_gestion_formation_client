<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-10 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link {{  Request::route()->named('home') ? 'active' : '' }}">Accueil</a>
            <a href="{{route('formation')}}" class="nav-item nav-link {{  Request::route()->named('formation') ? 'active' : '' }}">Formations</a>
            <a href="{{route('about')}}" class="nav-item nav-link {{  Request::route()->named('about') ? 'active' : '' }}">A propos</a>
            <a href="{{route('contact')}}" class="nav-item nav-link {{  Request::route()->named('contact') ? 'active' : '' }}">Contact</a>

            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <a href="#" class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </a>
            @endif

            @if (Route::has('register'))
            <a href="#" class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </a>
            @endif
            @else
            <div class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu fade-down m-0">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Déconnexion
                    </a>

                    <a class="dropdown-item" href="{{ route('getProfil',  ['id' => Auth::user()->id]) }}">
                        Mon profil
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
        </div>
        <!-- Right Side Of Navbar -->

    </div>
</nav>
<!-- Navbar End -->