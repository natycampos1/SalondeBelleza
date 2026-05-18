<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    public function run(): void
    {
        $oServicio = new \App\Models\Servicio();
        $oServicio->nombre = 'Keratina';
        $oServicio->categoria = 'Alisado';
        $oServicio->precio = 45000.00;
        $oServicio->duracion_min = 120;
        $oServicio->activo = true;
        $oServicio->save();

        $oServicio2 = new \App\Models\Servicio();
        $oServicio2->nombre = 'Liso Japonés';
        $oServicio2->categoria = 'Alisado';
        $oServicio2->precio = 55000.00;
        $oServicio2->duracion_min = 150;
        $oServicio2->activo = true;
        $oServicio2->save();

        $oServicio3 = new \App\Models\Servicio();
        $oServicio3->nombre = 'Nanoplastia';
        $oServicio3->categoria = 'Alisado';
        $oServicio3->precio = 50000.00;
        $oServicio3->duracion_min = 120;
        $oServicio3->activo = true;
        $oServicio3->save();

        $oServicio4 = new \App\Models\Servicio();
        $oServicio4->nombre = 'Mechas con Botox';
        $oServicio4->categoria = 'Color';
        $oServicio4->precio = 60000.00;
        $oServicio4->duracion_min = 180;
        $oServicio4->activo = true;
        $oServicio4->save();

        $oServicio5 = new \App\Models\Servicio();
        $oServicio5->nombre = 'Balayage';
        $oServicio5->categoria = 'Color';
        $oServicio5->precio = 65000.00;
        $oServicio5->duracion_min = 180;
        $oServicio5->activo = true;
        $oServicio5->save();

        $oServicio6 = new \App\Models\Servicio();
        $oServicio6->nombre = 'Tinte con Velo de Brillo';
        $oServicio6->categoria = 'Color';
        $oServicio6->precio = 40000.00;
        $oServicio6->duracion_min = 90;
        $oServicio6->activo = true;
        $oServicio6->save();

        $oServicio7 = new \App\Models\Servicio();
        $oServicio7->nombre = 'Células Madre';
        $oServicio7->categoria = 'Hidratación';
        $oServicio7->precio = 35000.00;
        $oServicio7->duracion_min = 60;
        $oServicio7->activo = true;
        $oServicio7->save();

        $oServicio8 = new \App\Models\Servicio();
        $oServicio8->nombre = 'Repolarización Capilar';
        $oServicio8->categoria = 'Hidratación';
        $oServicio8->precio = 30000.00;
        $oServicio8->duracion_min = 60;
        $oServicio8->activo = true;
        $oServicio8->save();

        $oServicio9 = new \App\Models\Servicio();
        $oServicio9->nombre = 'Corte';
        $oServicio9->categoria = 'Corte';
        $oServicio9->precio = 15000.00;
        $oServicio9->duracion_min = 30;
        $oServicio9->activo = true;
        $oServicio9->save();

        $oServicio10 = new \App\Models\Servicio();
        $oServicio10->nombre = 'Hidratación';
        $oServicio10->categoria = 'Hidratación';
        $oServicio10->precio = 25000.00;
        $oServicio10->duracion_min = 45;
        $oServicio10->activo = true;
        $oServicio10->save();
    }
}
