{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}

{{-- Cargar Bootstrap y estilos base (heredados del panel) --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Listado de Libros</h1>
        <a href="{{ route('libros.create') }}" class="btn btn-success" target="frameprincipal">Agregar Libro</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($libros->count())
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Género</th>
                <th>Año</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->genero }}</td>
                <td>{{ $libro->anio }}</td>
                <td>
                    <span class="badge {{ $libro->estado == 'disponible' ? 'bg-success' : 'bg-warning text-dark' }}">
                        {{ ucfirst($libro->estado) }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('libros.show', $libro) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('libros.edit', $libro) }}" class="btn btn-sm btn-primary" target="frameprincipal">Editar</a>
                    <form action="{{ route('libros.destroy', $libro) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este libro?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <div class="alert alert-warning">
            No hay libros registrados aún.
        </div>
    @endif
</div>

{{-- scripts para Cargar Bootstrap y estilos base --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>

{{-- @endsection --}}
