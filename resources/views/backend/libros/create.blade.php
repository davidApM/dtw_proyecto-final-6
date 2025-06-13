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

        <button type="submit" class="btn btn-primary"
                onclick="sessionStorage.setItem('mensajeLibro','¡Libro guardado exitosamente!')">
            Guardar Libro
        </button>
    </form>     
</div>  

{{-- scripts para Cargar Bootstrap y estilos base --}}
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
