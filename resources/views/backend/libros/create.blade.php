{{-- @extends('layouts.app') --}}  
{{-- Cargar Bootstrap y estilos base (heredados del panel) --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
<link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">  

{{-- @section('content') --}}     
<div class="container mt-4">         
    <h1 class="mb-4">Agregar Libro</h1>                  

    <form id="form-libro" action="{{ route('libros.store') }}" method="POST" enctype="multipart/form-data">                         
        @csrf

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}">
            @error('titulo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" value="{{ old('autor') }}">
            @error('autor')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" name="genero" id="genero" class="form-control" value="{{ old('genero') }}">
            @error('genero')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="anio" class="form-control" value="{{ old('anio') }}">
            @error('anio')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select">
                <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="prestado" {{ old('estado') == 'prestado' ? 'selected' : '' }}>Prestado</option>
            </select>
            @error('estado')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="portada" class="form-label">Portada del Libro</label>
            <input type="file" name="portada" id="portada" class="form-control" accept="image/*">
            @error('portada')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"
                onclick="sessionStorage.setItem('mensajeLibro','¡Libro guardado exitosamente!')">
            Guardar Libro
        </button>
    </form>     
</div>  

{{-- scripts para Cargar Bootstrap y funcionalidad --}}
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ asset('js/adminlte.min.js') }}"></script>  

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Mostrar mensaje de éxito almacenado en sessionStorage
    const msg = sessionStorage.getItem('mensajeLibro');
    if (msg) {
        alert(msg);
        sessionStorage.removeItem('mensajeLibro');
    }

    // 2. Autoguardado de campos en localStorage
    const campos = ['titulo', 'autor', 'genero', 'anio', 'estado'];
    campos.forEach(campo => {
        const input = document.querySelector(`[name="${campo}"]`);
        if (!input) return;

        // Restaurar valor si existe
        const saved = localStorage.getItem('libroCreate_' + campo);
        if (saved) input.value = saved;

        // Guardar al escribir
        input.addEventListener('input', () => {
            localStorage.setItem('libroCreate_' + campo, input.value);
        });
    });

    // 3. Limpiar autoguardado al enviar el formulario
    document.getElementById('form-libro')
        .addEventListener('submit', () => {
            campos.forEach(campo => {
                localStorage.removeItem('libroCreate_' + campo);
            });
        });
});
</script>
{{-- @endsection --}}
