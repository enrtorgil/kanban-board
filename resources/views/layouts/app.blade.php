<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Kanban Board') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme');
            const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const theme = savedTheme || (systemDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @stack('styles')
</head>

<body>
    <div id="app">
        <nav class="app-navbar">
            <div class="container app-navbar-inner">
                <a class="app-brand" href="{{ auth()->check() ? route('home') : url('/') }}">
                    <span>Kanban</span>Board
                </a>

                <div class="app-navbar-right">
                    @guest
                        @if (Route::has('login'))
                            <a class="app-nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="btn btn-primary app-nav-btn" href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @else
                        <a class="app-nav-link" href="{{ route('home') }}">Inicio</a>

                        <div class="dropdown">
                            <a id="navbarDropdown" class="app-user-trigger" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="user-chip">
                                    <span class="user-avatar">
                                        @if (Auth::user()->avatar)
                                            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                                        @else
                                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                        @endif
                                    </span>
                                    {{ Auth::user()->name }}
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    Inicio
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest

                    <button type="button" class="theme-toggle" id="theme-toggle" aria-label="Cambiar tema">
                        <span id="theme-icon">◐</span>
                    </button>
                </div>
            </div>
        </nav>

        <main class="app-shell">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

    @stack('scripts')
</body>

</html>
