<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        $oUsuario = new \App\Models\Usuario();
        $oUsuario->nombre = 'Karolina Admin';
        $oUsuario->email = 'admin@karolinasalon.com';
        $oUsuario->password = 'admin1234';
        $oUsuario->rol = 'administrador';
        $oUsuario->save();
    }
}
