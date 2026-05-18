<?php

namespace Database\Factories;

use App\Models\Cita;
use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\Promocion;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    protected $model = Cita::class;

    public function definition()
    {
        return [
            'cliente_id'   => Cliente::all()->random()->id,
            'usuario_id'   => Usuario::all()->random()->id,
            'promocion_id' => null,
            'fecha'        => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'hora'         => $this->faker->randomElement(['09:00', '10:00', '11:00', '14:00', '15:00', '16:00']),
            'estado'       => $this->faker->randomElement(['pendiente', 'confirmada', 'completada', 'cancelada']),
            'observaciones'=> $this->faker->sentence(),
            'total'        => $this->faker->randomFloat(2, 15000, 70000),
        ];
    }
}
