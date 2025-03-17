<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration {
    public function up(): void
    {
        //tabla detalles pedidos-gabriela
        Schema::create('detallespedidos', function (Blueprint $table) {
            $table->id('iddetallespedidos');
            $table->integer('cantidad');
            $table->decimal('preciounitario', 10, 2);
            $table->foreignId('idpedidos')->constrained('pedidos')->onDelete('cascade');
            $table->foreignId('idproducto')->constrained('productos')->onDelete('cascade');
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('detallespedidos');
    }
};
