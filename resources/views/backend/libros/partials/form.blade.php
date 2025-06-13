@csrf

<div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror"
           value="{{ old('titulo') }}">
    @error('titulo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror"
           value="{{ old('autor') }}">
    @error('autor')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="genero" class="form-label">Género</label>
    <input type="text" name="genero" class="form-control @error('genero') is-invalid @enderror"
           value="{{ old('genero') }}">
    @error('genero')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="anio" class="form-label">Año</label>
    <input type="number" name="anio" class="form-control @error('anio') is-invalid @enderror"
           value="{{ old('anio') }}">
    @error('anio')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="estado" class="form-label">Estado</label>
    <select name="estado" class="form-select @error('estado') is-invalid @enderror">
        <option value="">Seleccionar...</option>
        <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
        <option value="prestado" {{ old('estado') == 'prestado' ? 'selected' : '' }}>Prestado</option>
    </select>
    @error('estado')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('form-libro');

        if (form) {
            form.addEventListener('submit', function (e) {
                let valid = true;
                let messages = [];

                const titulo = form.titulo.value.trim();
                const autor = form.autor.value.trim();
                const genero = form.genero.value.trim();
                const anio = form.anio.value.trim();
                const estado = form.estado.value;

                if (!titulo) messages.push("El título es obligatorio.");
                if (!autor) messages.push("El autor es obligatorio.");
                if (!genero) messages.push("El género es obligatorio.");
                if (!anio || isNaN(anio) || anio < 1500 || anio > new Date().getFullYear()) {
                    messages.push("El año debe ser válido (entre 1500 y el actual).");
                }
                if (!estado) messages.push("El estado es obligatorio.");

                if (messages.length > 0) {
                    e.preventDefault();
                    alert(messages.join("\n"));
                }
            });
        }
    });
</script>
