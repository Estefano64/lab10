<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('styles') <!-- Esto permite que las vistas hijas definan estilos adicionales -->
</head>
<body>

<nav>
    <!-- Aquí podrías incluir la barra de navegación común a todas las páginas -->
</nav>

<div class="container">
    @yield('content') <!-- Esto insertará el contenido específico de cada página -->
</div>

<footer>
    <!-- Aquí podrías incluir el pie de página común a todas las páginas -->
</footer>

<script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>

