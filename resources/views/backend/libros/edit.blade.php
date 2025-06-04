{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}

@php
    foreach (['titulo', 'autor', 'genero', 'anio', 'estado'] as $campo) {
        if (!old($campo)) {
            request()->merge([$campo => $libro->$campo ?? '']);
        }
    }
@endphp

{{-- Cargar Bootstrap y estilos base (heredados del panel) --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

    <div class="container">
        <h1>Editar Libro</h1>
        
        <form id="form-libro" action="{{ route('libros.update', $libro) }}" method="POST">
            @method('PUT')
            @include('backend.libros.partials.form')
        </form>
    </div>

{{-- scripts para Cargar Bootstrap y estilos base --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>

{{-- @endsection --}}
