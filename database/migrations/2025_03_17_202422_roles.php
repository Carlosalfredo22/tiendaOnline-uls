<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Ejecutar la migración.
     *
     * @return void
     */
    public function up()
    {
        //Tabla roles cambios hechos -- Carlos Alfredo
        Schema::create('roles', function (Blueprint $table) {
            $table->id('idroles'); // Definir la columna idroles como clave primaria
            $table->string('nombres', 50); // Columna para los nombres de los roles
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    /**
     * Deshacer la migración.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}

