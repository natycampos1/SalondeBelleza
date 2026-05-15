<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

    <div id="encabezado">
        ✂ Karolina Salón
        <small>Especialistas en tratamientos capilares</small>
    </div>

    <div id="menu">
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('agenda.create') }}">Nueva Cita</a>
        <a href="{{ route('usuarios.index') }}">Usuarios</a>
    </div>

    <div id="contenedor">

        <div id="sidebar">
            @section('sidebar')
                <h1>Menú</h1>
            @show
        </div>

        <div id="principal">
            @yield('contenido')
        </div>

    </div>

    <div id="pie">
        &copy; 2026 Karolina Salón — Todos los derechos reservados
    </div>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
