<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Ejecutar la migración.
     *
     * @return void
     */
    public function up()
    {
        //Tabla Usuario --Carlos Alfredo
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('idusuario'); // Definir la columna idusuario como clave primaria
            $table->string('nombre'); // Columna para el nombre del usuario
            $table->string('email')->unique(); // Columna para el email (único)
            $table->string('contrasena'); // Columna para la contraseña
            $table->foreignId('idroles')->constrained('roles'); // Clave foránea a la tabla roles
            $table->foreignId('iddireccion')->constrained('direccion'); // Clave foránea a la tabla direcciones
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
        Schema::dropIfExists('usuario');
    }
}

