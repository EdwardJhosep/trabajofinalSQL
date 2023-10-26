<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('imagen');
            $table->decimal('precio_original', 10, 2);
            $table->decimal('precio_oferta', 10, 2);
            $table->integer('existencias');
            $table->string('categoria');
            $table->string('proveedor');
            $table->timestamps(); // Creado en y Actualizado en
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
