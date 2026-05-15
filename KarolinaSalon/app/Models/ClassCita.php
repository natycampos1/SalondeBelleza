<?php

namespace App\Models;

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
