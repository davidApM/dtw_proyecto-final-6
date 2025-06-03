{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}

{{-- Cargar Bootstrap y estilos base (heredados del panel) --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

<div class="container">
    <h1>Detalle del Libro</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $libro->titulo }}</h5>
            <p class="card-text"><strong>Autor:</strong> {{ $libro->autor }}</p>
            <p class="card-text"><strong>Género:</strong> {{ $libro->genero }}</p>
            <p class="card-text"><strong>Año:</strong> {{ $libro->anio }}</p>
            <p class="card-text">
                <strong>Estado:</strong>
                <span class="badge {{ $libro->estado == 'disponible' ? 'bg-success' : 'bg-warning text-dark' }}">
                    {{ ucfirst($libro->estado) }}
                </span>
            </p>
        </div>
    </div>

    <a href="{{ route('libros.index') }}" class="btn btn-secondary">Volver al listado</a>
    <a href="{{ route('libros.edit', $libro) }}" class="btn btn-primary">Editar</a>
</div>

{{-- scripts para Cargar Bootstrap y estilos base --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>

{{-- @endsection --}}