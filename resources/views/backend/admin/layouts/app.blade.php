<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/libros.js') }}"></script>
    @yield('scripts')
</body>
</html>
