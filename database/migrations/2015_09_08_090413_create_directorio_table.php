<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorio', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('path');
            $table->string('nombre_unidad_administrativa');
            $table->string('cct');
            $table->string('telefono');
            $table->string('celular');
            $table->string('email');
            $table->timestamps();
            $table->integer('tipo_id')->unsigned(); //relacionar la talas 
            $table->foreign('tipo_id')->references('id')->on('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('directorio');
    }
}
