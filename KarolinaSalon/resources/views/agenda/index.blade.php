@extends('layouts.plantilla')

@section('title', 'Inicio - Karolina Salón')

@section('sidebar')
    @parent

    <p>Bienvenida al sistema de gestión de citas de Karolina Salón.</p>
@endsection

@section('contenido')

    <div style="text-align: left; font-family: Arial">

        <strong>
            <span style="font-family: Arial; font-size: 24pt">
                Karolina Salón
            </span>
        </strong>

        <br />
        <br />

        <span style="font-family: Arial; font-size: 14pt">
            Especialistas en tratamientos capilares de alta calidad.
        </span>

        <br />
        <br />

        <strong>Nuestros servicios:</strong>

        <br />
        <br />

        &nbsp;&nbsp;- Keratina <br />
        &nbsp;&nbsp;- Liso Japonés <br />
        &nbsp;&nbsp;- Nanoplastia <br />
        &nbsp;&nbsp;- Mechas con Botox <br />
        &nbsp;&nbsp;- Balayage <br />
        &nbsp;&nbsp;- Tinte con Velo de Brillo <br />
        &nbsp;&nbsp;- Células Madre <br />
        &nbsp;&nbsp;- Repolarización Capilar <br />
        &nbsp;&nbsp;- Corte <br />
        &nbsp;&nbsp;- Hidratación <br />

        <br />

        <strong>Horario de atención:</strong>

        <br />
        <br />

        &nbsp;&nbsp;Lunes a Sábado — 8:00 am a 6:00 pm

        <br />
        <br />

        <strong>Promociones de la semana:</strong>

        <br />
        <br />

        &nbsp;&nbsp;<strong>Miércoles:</strong> Liso Japonés + Corte — precio especial <br />
        &nbsp;&nbsp;<strong>Jueves:</strong> Keratina + Hidratación — precio especial <br />
        &nbsp;&nbsp;<strong>Viernes:</strong> Balayage + Velo de Brillo — precio especial <br />

        <br />

        <a href="{{ route('agenda.create') }}">
            <input
                type="button"
                value="Reservar cita"
                style="width:130px;"
            />
        </a>

    </div>

@endsection
