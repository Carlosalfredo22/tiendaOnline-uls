<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id('idcarrito');
            $table->string('nombreproducto', 255);  // Campo para el nombre del producto
            $table->integer('cantidad');            // Campo para la cantidad del producto
            $table->decimal('precio', 8, 2);        // Campo para el precio del producto
            $table->timestamp('fechaagregado');     // Fecha en que el producto se agregó al carrito
            $table->foreignId('idusuario')->constrained('usuario'); // Clave foránea para el usuario
            $table->foreignId('idproducto')->constrained('productos'); // Clave foránea para el producto
 
            $table->timestamps();  // Para los campos created_at y updated_at
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito');
    }
}