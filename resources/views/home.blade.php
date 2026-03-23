@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <div class="mb-4">
        <h1 class="page-title">Bienvenido, {{ auth()->user()->name }}</h1>
        <p class="page-subtitle">
            Visualiza, organiza y controla el progreso de tus proyectos.
            Gestiona tus tareas con un flujo Kanban flexible y configurable.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="app-card p-4 h-100">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                    <div>
                        <h2 class="h4 mb-1">Tu espacio de trabajo</h2>
                        <p class="text-muted mb-0">
                            Vamos a construir una app más limpia que el módulo del ERP, centrada en Kanban y detalle de
                            tarea.
                        </p>
                    </div>

                    <button class="btn btn-primary" disabled>
                        Nuevo proyecto
                    </button>
                </div>

                <div class="row g-3">
                    <div class="col-12 col-md-4">
                        <div class="app-card p-3 h-100">
                            <div class="text-muted small mb-1">Proyectos</div>
                            <div class="fs-3 fw-bold">0</div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="app-card p-3 h-100">
                            <div class="text-muted small mb-1">Tareas abiertas</div>
                            <div class="fs-3 fw-bold">0</div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="app-card p-3 h-100">
                            <div class="text-muted small mb-1">Usuarios</div>
                            <div class="fs-3 fw-bold">1</div>
                        </div>
                    </div>
                </div>

                <h3 class="h5 mb-3 my-5">Próximos pasos</h3>

                <div class="d-flex flex-column gap-3">
                    <div class="border rounded-4 p-3">
                        <div class="fw-semibold mb-1">1. Crear estructura de proyectos</div>
                        <div class="text-muted small">
                            Tabla de proyectos y una vista inicial simple.
                        </div>
                    </div>

                    <div class="border rounded-4 p-3">
                        <div class="fw-semibold mb-1">2. Añadir columnas por proyecto</div>
                        <div class="text-muted small">
                            La base clave del Kanban flexible que quieres montar.
                        </div>
                    </div>

                    <div class="border rounded-4 p-3">
                        <div class="fw-semibold mb-1">3. Crear tareas y vista detalle</div>
                        <div class="text-muted small">
                            Con prioridad, asignados, comentarios y actividad.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="app-card p-4 h-100">
                <h2 class="h5 mb-3">Estado actual</h2>

                <div class="d-flex flex-column gap-3">
                    <div class="border rounded-4 p-3">
                        <div class="fw-semibold">Laravel 12 + Auth clásica</div>
                        <div class="text-muted small mt-1">
                            Base lista para empezar a construir el producto.
                        </div>
                    </div>

                    <div class="border rounded-4 p-3">
                        <div class="fw-semibold">UI base limpia</div>
                        <div class="text-muted small mt-1">
                            Sin AdminLTE, sin DataTables como núcleo, y más preparada para responsive.
                        </div>
                    </div>

                    <div class="border rounded-4 p-3">
                        <div class="fw-semibold">Siguiente módulo</div>
                        <div class="text-muted small mt-1">
                            Proyectos + columnas configurables + tablero Kanban.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
