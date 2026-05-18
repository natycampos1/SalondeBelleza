<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('cita_servicios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cita_id')->constrained('citas');
            $table->foreignId('servicio_id')->constrained('servicios');
            $table->decimal('precio_aplicado', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cita_servicios');
    }
}
