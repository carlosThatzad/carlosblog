<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/11/19
 * Time: 12:11
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments ('id')->nullable(false);
            $table->string('titulo');
            $table->string('descripcion');
            $table->text('contenido');
            $table->string('imagen');
            $table->integer('user_id');
            $table->integer('categoria_id');
            $table->rememberToken();
            $table->timestamps();//fecha de creacion
            $table->foreign('user_id')->references('id')->on('users');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}