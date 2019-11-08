<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{

    public function up()
    {
        Schema::create('articulos',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->text('contenido');
            $table->string('imagen');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->timestamps();//fecha de creacion
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('categoria_id')->references('id')->on('categoria');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}