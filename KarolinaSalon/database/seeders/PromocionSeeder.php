<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromocionSeeder extends Seeder
{
    public function run(): void
    {
        $oPromocion = new \App\Models\Promocion();
        $oPromocion->nombre = 'Liso Japonés + Corte';
        $oPromocion->dia_semana = 'Miércoles';
        $oPromocion->precio_especial = 60000.00;
        $oPromocion->activo = true;
        $oPromocion->save();

        $oPromocion2 = new \App\Models\Promocion();
        $oPromocion2->nombre = 'Keratina + Hidratación';
        $oPromocion2->dia_semana = 'Jueves';
        $oPromocion2->precio_especial = 55000.00;
        $oPromocion2->activo = true;
        $oPromocion2->save();

        $oPromocion3 = new \App\Models\Promocion();
        $oPromocion3->nombre = 'Balayage + Velo de Brillo';
        $oPromocion3->dia_semana = 'Viernes';
        $oPromocion3->precio_especial = 70000.00;
        $oPromocion3->activo = true;
        $oPromocion3->save();
    }
}
