<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Usua_Nombre');
            $table->string('Usua_Apellido');
            $table->string('Usua_Correo');
            $table->string('Usua_Telefono');
            $table->string('Usua_Ocupacion');
            $table->integer('Usua_Cedula')->unsigned()->nullable();
            $table->integer('Usua_Edad')->unsigned()->nullable();
            $table->string('Usua_Direccion')->nullable();
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
        Schema::dropIfExists('TBL_Usuarios');
    }
}
