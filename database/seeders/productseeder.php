<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre_producto' => 'carne de res',
            'descripcion' => 'la mejor carne de res del mercado',
            'precio' => '12000',
            'estado' => 1,
            'fecha_publicacion' => date('y-m-d:h:i'),
        ]);

        Producto::create([
            'nombre_producto' => 'carne de cerdo',
            'descripcion' => 'la mejor carne de cerdo del mercado',
            'precio' => '15000',
            'estado' => 2,
            'fecha_publicacion' => date('y-m-d:h:i'),
        ]);
    }
}
