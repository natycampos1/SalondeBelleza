@extends('layouts.plantilla')

@section('title', 'Nueva Cita - Karolina Salón')

@section('sidebar')
    @parent

    <p>Complete el formulario para registrar una nueva cita.</p>
@endsection

@section('contenido')

<form action="{{ route('agenda.store') }}" method="POST">

    @csrf

    @if ($errors->any())
        <div style="background-color: #c0392b; color: white; padding: 10px; margin-bottom: 16px; border-radius: 4px;">
            <ul style="margin: 0; padding-left: 20px;">

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    <div style="text-align: left; font-family: Arial;">

        <strong style="font-size: 24pt;">
            CONCERTAR UNA CITA
        </strong>

        <br><br>

        Nombre de la clienta:

        <br>

        <input
            name="nombreClienta"
            type="text"
            id="nombreClienta"
            value="{{ old('nombreClienta') }}"
            style="width:504px;"
        >

        <br>

        @error('nombreClienta')
            <small style="color: #c0392b;">
                {{ $message }}
            </small>
        @enderror

        <br><br>

        Servicios (puede seleccionar varios):

        <br>

        <select
            name="idServicios[]"
            id="idServicios"
            multiple
            style="font-size:Medium; width:400px; height:160px;"
        >
            <option value="1">Keratina</option>
            <option value="2">Liso Japonés</option>
            <option value="3">Nanoplastia</option>
            <option value="4">Mechas con Botox</option>
            <option value="5">Balayage</option>
            <option value="6">Tinte con Velo de Brillo</option>
            <option value="7">Células Madre</option>
            <option value="8">Repolarización Capilar</option>
            <option value="9">Corte</option>
            <option value="10">Hidratación</option>
        </select>

        <br>

        <small style="color: gray;">
            Mantenga presionado Ctrl (o Cmd en Mac) para seleccionar varios servicios.
        </small>

        <br>

        @error('idServicios')
            <small style="color: #c0392b;">
                {{ $message }}
            </small>
        @enderror

        <br><br>

        Día:

        <br>

        <select
            name="idDia"
            id="idDia"
            style="font-size:Medium; width:200px;"
        >
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miércoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sábado</option>
        </select>

        <br><br>

        Hora:

        <br><br>

        <span>

            <input
                id="hora8"
                type="radio"
                name="hora"
                value="8"
                checked="checked"
            >
            <label for="hora8" style="margin-right: 15px;">
                8:00 am
            </label>

            <input
                id="hora10"
                type="radio"
                name="hora"
                value="10"
            >
            <label for="hora10" style="margin-right: 15px;">
                10:00 am
            </label>

            <input
                id="hora12"
                type="radio"
                name="hora"
                value="12"
            >
            <label for="hora12" style="margin-right: 15px;">
                12:00 md
            </label>

            <input
                id="hora14"
                type="radio"
                name="hora"
                value="14"
            >
            <label for="hora14" style="margin-right: 15px;">
                2:00 pm
            </label>

            <input
                id="hora16"
                type="radio"
                name="hora"
                value="16"
            >
            <label for="hora16">
                4:00 pm
            </label>

        </span>

        <br><br>

        Promoción del día:

        <br>

        <select
            name="idPromocion"
            id="idPromocion"
            style="font-size:Medium; width:400px;"
        >
            <option value="0">-- Sin promoción --</option>
            <option value="1">
                Miércoles: Liso Japonés + Corte
            </option>

            <option value="2">
                Jueves: Keratina + Hidratación
            </option>

            <option value="3">
                Viernes: Balayage + Velo de Brillo
            </option>
        </select>

        <br><br>

        Observaciones:

        <br>

        <textarea
            name="observaciones"
            rows="2"
            cols="20"
            id="observaciones"
            style="height:64px; width:440px;"
        >{{ old('observaciones') }}</textarea>

        <br><br>

        <input
            type="submit"
            name="btEnviar"
            value="Enviar datos"
            id="btEnviar"
            style="width:112px; margin-right: 10px;"
        >

        <input
            type="reset"
            name="btRestablecer"
            value="Restablecer"
            id="btRestablecer"
            style="width:112px;"
        >

    </div>

</form>

@endsection
