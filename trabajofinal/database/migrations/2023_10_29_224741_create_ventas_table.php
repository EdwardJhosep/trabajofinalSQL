<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id'); // Clave foránea hacia la tabla clientes
            $table->unsignedBigInteger('producto_id'); // Clave foránea hacia la tabla productos
            $table->integer('cantidad');
            $table->date('fecha');
            $table->decimal('precio_unitario', 10, 2);
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
