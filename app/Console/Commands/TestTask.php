<?php

namespace App\Console\Commands;

use App\Models\Producto;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Andres Rincon';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $price = ['100', '200', '300', '400', '500'];
        $products = new Producto;
        $products->nombre_producto = date('Y-m-d-H:i');
        $products->precio = Arr::Random($price);
        $products->descripcion = 'Esta es la descripcion del producto utilizando tareas programadas';
        $products->estado = 1;
        $products->fecha_publicacion = date('Y-m-d-H:i');
        $products->save();
    }
}
