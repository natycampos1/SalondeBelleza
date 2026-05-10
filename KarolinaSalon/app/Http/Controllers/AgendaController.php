<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        return view('Agenda.index');
    }

    public function create()
    {
        return view('Agenda.create');
    }

    public function show(string $agenda)
    {
        return view('Agenda.show', ['agenda' => $agenda]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreClienta'  => 'required',
            'idServicios'    => 'required|array|min:1',
            'idServicios.*'  => 'required|integer',
            'idDia'          => 'required|integer',
            'hora'           => 'required|integer',
            'idPromocion'    => 'nullable|integer',
            'observaciones'  => 'nullable'
        ],
        [
            'nombreClienta.required'  => 'El nombre de la clienta es obligatorio.',
            'idServicios.required'    => 'Debe seleccionar al menos un servicio.',
            'idServicios.min'         => 'Debe seleccionar al menos un servicio.',
            'idDia.required'          => 'Debe seleccionar un día.',
            'hora.required'           => 'Debe seleccionar una hora.',
        ]);

        $cita = new ClassCita();

        $cita->identificadorCita = 1; // Este número debe venir de un dato de base de datos (autonumerico o identidad)

        $cita->nombreClienta = $request->get('nombreClienta');

        $cita->idServicios = $request->get('idServicios');

        $cita->idDia = $request->get('idDia');

        $cita->hora = $request->get('hora');

        $cita->idPromocion = $request->get('idPromocion') ?? 0;

        $cita->observaciones = $request->get('observaciones') ?? '';

        // Arrays de traducción
        $dias = [
            1 => 'Lunes',
            2 => 'Martes',
            3 => 'Miércoles',
            4 => 'Jueves',
            5 => 'Viernes',
            6 => 'Sábado'
        ];

        $horas = [
            8  => '8:00 am',
            10 => '10:00 am',
            12 => '12:00 md',
            14 => '2:00 pm',
            16 => '4:00 pm'
        ];

        $servicios = [
            1  => 'Keratina',
            2  => 'Liso Japonés',
            3  => 'Nanoplastia',
            4  => 'Mechas con Botox',
            5  => 'Balayage',
            6  => 'Tinte con Velo de Brillo',
            7  => 'Células Madre',
            8  => 'Repolarización Capilar',
            9  => 'Corte',
            10 => 'Hidratación'
        ];

        $promociones = [
            0 => 'Sin promoción',
            1 => 'Miércoles: Liso Japonés + Corte',
            2 => 'Jueves: Keratina + Hidratación',
            3 => 'Viernes: Balayage + Velo de Brillo'
        ];

        // salvamos información en base de datos o repositorio

        return view('Agenda.show', [
            'agenda'      => $cita,
            'dias'        => $dias,
            'horas'       => $horas,
            'servicios'   => $servicios,
            'promociones' => $promociones
        ]);

        //return view('agenda.index', compact('agenda'));
    }
}

class ClassCita
{
    private int $identificadorCita;
    private string $nombreClienta;
    private array $idServicios;
    private int $idDia;
    private int $hora;
    private int $idPromocion;
    private string $observaciones;

    public function __construct()
    {
        $this->identificadorCita = 0;
        $this->nombreClienta     = "";
        $this->idServicios       = [];
        $this->idDia             = 0;
        $this->hora              = 0;
        $this->idPromocion       = 0;
        $this->observaciones     = "";
    }

    public function __get(string $property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    /** @param mixed $value */
    public function __set(string $property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
