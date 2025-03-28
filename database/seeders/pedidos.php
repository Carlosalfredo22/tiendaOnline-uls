<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
            ['usuario_id' => 2, 'total' => 319.98, 'estado' => 'pendiente', 'fecha_pedido' => now()],
        ]);
    }
}
