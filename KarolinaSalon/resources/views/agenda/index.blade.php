@extends('layouts.plantilla')

@section('title', 'Inicio - Karolina Salón')

@section('sidebar')
    @parent

    <p>Bienvenida al sistema de gestión de citas de Karolina Salón.</p>
@endsection

@section('contenido')

    <div style="text-align: left; font-family: Arial;">

        <strong style="font-size: 24pt;">
            Karolina Salón
        </strong>

        <br><br>

        <span style="font-size: 14pt;">
            Especialistas en tratamientos capilares de alta calidad.
        </span>

        <br><br>

        <strong>Nuestros servicios:</strong>

        <br><br>

        <ul>
            <li>Keratina</li>
            <li>Liso Japonés</li>
            <li>Nanoplastia</li>
            <li>Mechas con Botox</li>
            <li>Balayage</li>
            <li>Tinte con Velo de Brillo</li>
            <li>Células Madre</li>
            <li>Repolarización Capilar</li>
            <li>Corte</li>
            <li>Hidratación</li>
        </ul>

        <br>

        <strong>Horario de atención:</strong>

        <br><br>

        <p>Lunes a Sábado — 8:00 am a 6:00 pm</p>

        <br>

        <strong>Promociones de la semana:</strong>

        <br><br>

        <ul>
            <li>
                <strong>Miércoles:</strong>
                Liso Japonés + Corte — precio especial
            </li>

            <li>
                <strong>Jueves:</strong>
                Keratina + Hidratación — precio especial
            </li>

            <li>
                <strong>Viernes:</strong>
                Balayage + Velo de Brillo — precio especial
            </li>
        </ul>

        <br>

        <a href="{{ route('agenda.create') }}">
            <input
                type="button"
                value="Reservar cita"
                style="width:130px;"
            >
        </a>

    </div>

@endsection
