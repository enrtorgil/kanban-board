@extends('layouts.app')

@section('content')
    <div class="auth-page">
        <div class="w-100 auth-card">
            <div class="app-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <h1 class="auth-title">Verifica tu correo</h1>
                    <p class="auth-subtitle">Necesitamos confirmar tu dirección de email antes de continuar.</p>
                </div>

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        Se ha enviado un nuevo enlace de verificación a tu correo.
                    </div>
                @endif

                <p class="text-muted mb-3">
                    Antes de continuar, revisa tu correo y pulsa el enlace de verificación.
                </p>

                <p class="text-muted mb-4">
                    Si no has recibido el email, puedes solicitar otro ahora.
                </p>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Reenviar enlace de verificación
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
