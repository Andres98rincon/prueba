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
            $table->bigIncrements('id_producto')->comment('id del producto');
            $table->string('nombre_producto',100)->comment('Nombre del producto');
            $table->text('descripcion')->comment('Descripcion del producto');
            $table->float('precio')->comment('Precio del producto');
            $table->integer('estado')->comment('Estado del producto');
            $table->timestamp('fecha_publicacion')->comment('Fecha de publicacion del producto');
            $table->timestamps();
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
