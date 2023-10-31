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
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }


};
