<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration {

 public function up()
    {
        // contenido tabla Maricela
        Schema::create('direccion', function (Blueprint $table) {
            $table->id('iddireccion');
            $table->string('ciudad', 100);
            $table->string('pais', 100);
            $table->foreignId('idusuario')->constrained('usuario')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('direccion');
    }
};