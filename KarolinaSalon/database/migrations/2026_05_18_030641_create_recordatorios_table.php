<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordatoriosTable extends Migration
{
    public function up()
    {
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cita_id')->constrained('citas');
            $table->enum('tipo', ['WhatsApp', 'Email', 'SMS']);
            $table->text('mensaje');
            $table->boolean('enviado')->default(false);
            $table->timestamp('fecha_envio')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recordatorios');
    }
}
