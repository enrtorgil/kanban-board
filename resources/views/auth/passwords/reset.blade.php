@extends('layouts.app')

@section('content')
    <div class="auth-page">
        <div class="w-100 auth-card">
            <div class="app-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <h1 class="auth-title">Restablecer contraseña</h1>
                    <p class="auth-subtitle">Introduce tus datos para crear una nueva contraseña.</p>
                </div>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Nueva contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirmar contraseña</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">
                            Restablecer contraseña
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
