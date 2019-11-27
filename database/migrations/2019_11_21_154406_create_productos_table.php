<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('precio', 15, 2);
            $table->bigInteger('idCategoria')->unsigned();
        });

        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('idProducto')->unsigned();
            $table->bigInteger('idUsuario')->unsigned();
            $table->string('estadoCompra');
            $table->decimal('cantidad', 15,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('categorias');
    }
}
