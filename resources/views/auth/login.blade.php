@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <div class="row"></div>
                <div class="card-body">
                    <div class="loading-animation">
                        <div class="triangles">
                            <div class="triangle1"></div>
                            <div class="triangle2"></div>
                            <div class="triangle3"></div>
                        </div>
                    </div>

                    <style>
                        /* Estilos para la animación de carga */
                        body,
                        html {
                            margin: 0;
                            height: 100%;
                        }

                        .loading-animation {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            height: 100vh;
                            position: relative;
                            overflow: hidden;
                        }

                        .triangles {
                            display: flex;
                            justify-content: center;
                            margin-bottom: 20px;
                        }

                        .triangle1,
                        .triangle2,
                        .triangle3 {
                            width: 0;
                            height: 0;
                            border-left: 30px solid transparent;
                            border-right: 30px solid transparent;
                            border-bottom: 50px solid red;
                            margin: 0 5px;
                            animation: moveTriangle 1.5s infinite ease-in-out;
                        }

                        .triangle1 {
                            animation-delay: 0s;
                        }

                        .triangle2 {
                            animation-delay: 0.5s;
                        }

                        .triangle3 {
                            animation-delay: 1s;
                        }

                        .text {
                            font-size: 24px;
                            color: black; /* Cambia el color del texto si es necesario */
                        }

                        /* Animación para mover los triángulos */
                        @keyframes moveTriangle {
                            0% {
                                transform: translateY(0) rotate(0);
                            }
                            100% {
                                transform: translateY(50px) rotate(360deg);
                            }
                        }
                    </style>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const loadingAnimation = document.querySelector('.loading-animation');
                            const loginForm = document.getElementById('loginForm');

                            loadingAnimation.addEventListener('animationend', function() {
                                loadingAnimation.style.display = 'none'; // Ocultar la animación de carga
                                loginForm.style.display = 'block'; // Mostrar el formulario de inicio de sesión
                            });

                            // Emular el final de la animación después de un tiempo (en este caso, 3 segundos)
                            setTimeout(function() {
                                const event = new Event('animationend');
                                loadingAnimation.dispatchEvent(event);
                            }, 3000); // 3000 milisegundos = 3 segundos (puedes ajustar esto si lo necesitas)
                        });
                    </script>

                    <div class="card-body text-center" id="loginForm" style="display: none;">
                        <div class="text-center mb-4">
                            <img src="{{ asset('images/emperor.jfif') }}" alt="Minerva Logo" height="150">
                        </div>
                        <div class="card-header text-center h4">{{ __('Descubre un refugio de serenidad y hospitalidad en el corazón de tu ciudad.') }}</div>
                        <div class="card-body text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSObZCXRLn2jAQvtEhHW3lR_gkFy53M4Kghkv8yhPZyLg&s" alt="Imagen centrada" class="img-fluid">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">{{ __('Ingresar') }}</button>
                            </div>

                            <div class="mb-3 text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña') }}
                                    </a>
                                @endif
                            </div>
                            <div class="mb-3 text-center">
                                <p>{{ __("No tienes una cuenta") }} <a href="{{ route('register') }}">{{ __('Registrate en Minerva') }}</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
