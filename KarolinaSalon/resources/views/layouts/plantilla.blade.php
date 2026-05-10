<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/css/estilo.css')

</head>
<body>

    <div id="encabezado">
        ✂ Karolina Salón
        <small>Especialistas en tratamientos capilares</small>
    </div>

    <div id="menu">
        <a href="{{ route('agenda.index') }}">Inicio</a>
        <a href="{{ route('agenda.create') }}">Nueva Cita</a>
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

</body>
</html>
