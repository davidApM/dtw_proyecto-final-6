@extends('backend.admin.layouts.app')

@section('content')
<div class="container">
    <h2>Gestión de Libros</h2>

    <form id="formCrearLibro">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <button type="submit">Agregar libro</button>
    </form>

    <ul id="lista-libros"></ul>
</div>
@endsection
