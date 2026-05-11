@extends('layouts.plantilla')

@section('title', 'Detalle de Cita - Karolina Salón')

@section('sidebar')
    @parent

    <p>Resumen de la cita registrada exitosamente.</p>
@endsection

@section('contenido')

    <h1>¡Cita registrada exitosamente en Karolina Salón!</h1>

    <br>

    <div style="text-align: left; font-family: Arial;">

        <strong style="font-size: 24pt;">
            DETALLE DE LA CITA
        </strong>

        <br><br>

        <strong>Número de cita:</strong>
        {{ $agenda->identificadorCita }}

        <br><br>

        <strong>Clienta:</strong>
        {{ $agenda->nombreClienta }}

        <br><br>

        <strong>Día:</strong>
        {{ $dias[$agenda->idDia] ?? 'No especificado' }}

        <br><br>

        <strong>Hora:</strong>
        {{ $horas[$agenda->hora] ?? 'No especificada' }}

        <br><br>

        <strong>Servicios solicitados:</strong>

        <ul>
            @foreach($agenda->idServicios as $idServicio)
                <li>
                    {{ $servicios[$idServicio] ?? 'Servicio desconocido' }}
                </li>
            @endforeach
        </ul>

        <br>

        <strong>Promoción aplicada:</strong>
        {{ $promociones[$agenda->idPromocion] ?? 'Sin promoción' }}

        <br><br>

        <strong>Observaciones:</strong>
        {{ $agenda->observaciones ?: 'Ninguna' }}

        <br><br>

        <a href="{{ route('agenda.create') }}">
            <input
                type="button"
                value="Nueva cita"
                style="width:112px;"
            >
        </a>

        <a href="{{ route('agenda.index') }}">
            <input
                type="button"
                value="Ir al inicio"
                style="width:112px;"
            >
        </a>

    </div>

@endsection
