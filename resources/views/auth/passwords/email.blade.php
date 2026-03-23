@extends('layouts.app')

@section('title', 'Recuperar contraseña')

@section('content')
    <div class="auth-page">
        <div class="w-100 auth-card">
            <div class="app-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <h1 class="auth-title">Recuperar contraseña</h1>
                    <p class="auth-subtitle">Te enviaremos un enlace para restablecer tu contraseña.</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">
                            Enviar enlace de recuperación
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
