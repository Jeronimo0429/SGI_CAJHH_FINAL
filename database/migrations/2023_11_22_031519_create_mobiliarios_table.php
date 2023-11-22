<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiliario', function (Blueprint $table) {
            $table->id();
            $table->string('serial');
            $table->string('nombre');
            $table->string('valor');
            $table->string('estado');
            $table->string('propietario');
            $table->string('fechaEntrada');
            $table->date('fechaSalida')->nullable();
            $table->date('comentario');
            $table->date('opciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiliario');
    }
};