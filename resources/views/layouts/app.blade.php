<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <title> Imperium</title> 

    <link rel="icon" href="{{ asset('images/em.jfif') }}" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hoteles Imperium') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background-color: black; 
            font-family: 'Nunito', sans-serif; 
            margin: 0;
            padding: 0;
        }
        footer {
            background-color: black; 
            color: white; 
            text-align: center; 
            padding: 20px 0; 
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: black;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: blue;" style="color: blue;">
                    {{ config('app.name', 'Imperium') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de sesión') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                        </li>
                        @endif

                        @if (Route::has('about'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">{{ __('Acerca de Nosotros') }}</a>
                        </li>
                        @endif
                        
                        @if (Route::has('opiniones.foro'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('opiniones.foro') }}">{{ __('Foro-Reseñas') }}</a>
                        </li>
                        @endif

                        @if (Route::has('cliente.registro'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cliente.registro') }}">{{ __('Contacto-Promoción') }}</a>
                        </li>
                        @endif

                        @if (Route::has('Terminos'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Terminos') }}">{{ __('Terminos y conclusiones') }}</a>
                        </li>
                        @endif

                        @else
                        
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('fotos') }}">Subida de Reservas</a>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">Acerca de Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('Terminos') }}">Terminos y conclusiones </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('opiniones.foro') }}">Foro-Reseñas</a>
                        </ul>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Editar Perfil</a>
                            



                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>
                                <a href="{{ route('confirmar.eliminacion') }}" class="btn btn-danger">Eliminar mi Cuenta</a>
                             

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
    

  <footer>
    <p>&copy; 2023 Emperador - Reserva de Hoteles</p>
  </footer>

</body>
</html>
</body>

</html>