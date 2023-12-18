@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-primary text-white profile-card">
                <style>
    .profile-card {
        background-image: url('https://images.unsplash.com/photo-1617325247661-675ab4b64ae2?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNhbWF8ZW58MHx8MHx8fDA%3D'); /* Reemplaza con la ruta de tu imagen */
        background-size: cover;
    }</style>

                    <div class="card-header">
                        <h3 class="text-center">{{ __('Edita tu perfil a tu manera') }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PUT')

                    <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Nombre:') }}</label>
                            
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror transparent-input" name="name" value="{{ old('name') ?? auth()->user()->name }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo electrónico:') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror transparent-input" name="email" value="{{ old('email') ?? auth()->user()->email }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">{{ __('Contraseña actual:') }}</label>
                                    <div class="input-group">
                                        <input id="current_password" type="password" class="form-control transparent-input @error('current_password') is-invalid @enderror" name="current_password" required>
                                        <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Nueva contraseña:') }}</label>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror transparent-input" name="password" required>
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirmar nueva contraseña:') }}</label>
                                <div class="input-group">
                                    <input id="password_confirmation" type="password" class="form-control transparent-input" name="password_confirmation" required>
                                    <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirmation">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <style>.transparent-input {
                                    background-color: transparent;
                                    border: 1px solid #ced4da; 
                                }
                                </style>
                            <script>
                                function togglePasswordVisibility(inputId) {
                                    const passwordInput = document.getElementById(inputId);
                                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                    passwordInput.setAttribute('type', type);
                                }

                                document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
                                    togglePasswordVisibility('current_password');
                                });

                                document.getElementById('togglePassword').addEventListener('click', function() {
                                    togglePasswordVisibility('password');
                                });

                                document.getElementById('togglePasswordConfirmation').addEventListener('click', function() {
                                    togglePasswordVisibility('password_confirmation');
                                });
                            </script>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar cambios') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
