<!-- confirmar_eliminacion.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirmar Eliminación') }}</div>
                    <div class="card-body">
                        <p>¿Estás seguro de que deseas eliminar tu perfil?</p>
                        <form method="POST" action="{{ route('perfil.eliminar') }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar Perfil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
