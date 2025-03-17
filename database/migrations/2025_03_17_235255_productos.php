<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idproducto');
            $table->string('nombre', 255);  // Campo para el nombre del producto
            $table->text('descripcion');    // Campo para la descripción del producto
            $table->decimal('precio', 8, 2); // Campo para el precio del producto
            $table->integer('stock');       // Campo para el stock del producto
            $table->foreignId('idcategorias')->constrained('categorias'); // Clave foránea para la categoría
 
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
        Schema::dropIfExists('productos');
    }
}