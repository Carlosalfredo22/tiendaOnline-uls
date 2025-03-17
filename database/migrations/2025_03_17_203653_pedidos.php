<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        // Crear tabla pedidos Maricela
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('idpedidos'); // Llave primaria
            $table->date('fecha_de_pedido'); // Fecha del pedido
            $table->enum('estado', ['pendiente', 'enviado', 'otros']); // Estado del pedido
            $table->foreignId('idusuario')->constrained('usuario')->onDelete('cascade'); // Llave foránea de usuario
            $table->foreignId('idmetodopago')->constrained('metodopago')->onDelete('cascade'); // Llave foránea de método de pago
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
