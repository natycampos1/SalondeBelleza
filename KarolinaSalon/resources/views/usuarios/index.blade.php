@extends('layouts.plantilla')

@section('title', 'Usuarios - Karolina Salón')

@section('sidebar')
    @parent

    <p>Gestión de usuarios del sistema.</p>
@endsection

@section('contenido')

    <div style="text-align: left; font-family: Arial;">

        <strong style="font-size: 24pt;">
            USUARIOS
        </strong>

        <br><br>

        <p>Esta sección permitirá gestionar los usuarios del sistema.</p>

        <br>

        <div class="alert alert-info">
            La gestión completa de usuarios estará disponible próximamente.
        </div>

        <br>

        <a href="{{ route('home') }}">
            <input
                type="button"
                value="Volver al inicio"
                style="width:140px;"
            >
        </a>

    </div>

@endsection
