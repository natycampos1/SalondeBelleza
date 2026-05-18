<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaHistorialTable extends Migration
{
    public function up()
    {
        Schema::create('cita_historial', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cita_id')->constrained('citas');
            $table->enum('estado_anterior', ['pendiente', 'confirmada', 'completada', 'cancelada']);
            $table->enum('estado_nuevo', ['pendiente', 'confirmada', 'completada', 'cancelada']);
            $table->string('observacion', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cita_historial');
    }
}
