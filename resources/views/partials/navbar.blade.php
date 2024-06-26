<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="btn-group" role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('home') }}"><strong>Home</strong></a>
                    <hr>
                    <a class="dropdown-item" href="{{ route('user.index') }}"><strong>Utilizadores</strong></a>
                    <hr>
                    <button type="button" class="dropdown-item"><strong>Sócios</strong></button>
                    <a class="dropdown-item small-text" href="{{ route('socio.create') }}">Criar sócios</a>
                    <a class="dropdown-item small-text" href="{{ route('socio.index') }}">Listar sócios</a>
                    @auth
                        <a class="dropdown-item small-text" href="{{ route('socio.user', Auth::user()->id) }}">Listar os meus sócios</a>
                    @endauth
                    <hr>
                    <button type="button" class="dropdown-item"><strong>Editoras</strong></button>
                    <a class="dropdown-item small-text" href="{{ route('editora.create') }}">Criar editoras</a>
                    <a class="dropdown-item small-text" href="{{ route('editora.index') }}">Listar editoras</a>
                </div>
            </div>
            <a href="{{ route('home') }}" class="btn btn-outline-secondary">Home</a>
            <a href="{{ route('site.galeria') }}" class="btn btn-outline-secondary">Autor do mês</a>
            <a href="{{ route('site.servicos') }}" class="btn btn-outline-secondary">Serviços</a>
            <a href="{{ route('site.contacto') }}" class="btn btn-outline-secondary">Contactos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

    <main class="py-4">
        @yield('content')
    </main>
</div>
