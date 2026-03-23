@extends('layouts.app')

@section('title', 'Confirmar contraseña')

@section('content')
    <div class="auth-page">
        <div class="w-100 auth-card">
            <div class="app-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <h1 class="auth-title">Confirmar contraseña</h1>
                    <p class="auth-subtitle">Por seguridad, confirma tu contraseña antes de continuar.</p>
                </div>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex flex-column gap-3 mt-4">
                        <button type="submit" class="btn btn-primary">
                            Confirmar contraseña
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link p-0 text-center" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
