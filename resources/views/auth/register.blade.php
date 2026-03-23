@extends('layouts.app')

@section('content')
    <div class="auth-page">
        <div class="w-100 auth-card auth-card--wide">
            <div class="app-card p-4 p-md-5">
                <div class="text-center mb-4">
                    <h1 class="auth-title">Crear cuenta</h1>
                    <p class="auth-subtitle">Empieza a organizar tus proyectos y tareas en KanbanBoard</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row g-3">
                        <div class="col-12 col-md-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-12">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="password" class="form-label">Contraseña</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="password-confirm" class="form-label">Confirmar contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
