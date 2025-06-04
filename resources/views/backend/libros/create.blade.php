{{-- @extends('layouts.app') --}}

{{-- Cargar Bootstrap y estilos base (heredados del panel) --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

{{-- @section('content') --}}
    <div class="container">
        <h1>Agregar Libro</h1>
        
        <form id="form-libro" action="{{ route('libros.store') }}" method="POST">            
            @include('backend.libros.partials.form')
        </form>
    </div>

{{-- scripts para Cargar Bootstrap y estilos base --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>

{{-- @endsection --}}
