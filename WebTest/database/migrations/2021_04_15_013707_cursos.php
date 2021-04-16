<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //metodo para realizar una accion
        Schema::create('cursos', function (Blueprint $table) { 
            $table->id('id');
            $table->string('name');
            $table->text('descripcion');
            $table->timestamps();
        });
        //el metodo create necista 2 parametros el nombre de la tabla y una funcion anonima
        //la funcion anonima necesita un parametro un objeto de tipo blueprint es para crear 
        //las columnas de nuestra tabla, poniendo una variable hacemos instancia de este objeto
        //por medio de la varible llamamos a otros metodos para que estos se encarguen de crear las
        //columnas
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //metodo para revertir una accion
        Schema::dropIfExists('cursos');
    }

    //
}
