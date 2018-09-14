<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',80);
            $table->string('appaterno',50);
            $table->string('apmaterno',50);
            $table->string('cargo',50);
            $table->integer('ci');
            $table->string('direccion',50);
            $table->string('estadocivil',25);
            $table->date('fechanac');
            $table->string('genero');
            $table->string('nacionalidad',30);
            $table->integer('telefono');
            $table->integer('id_sindicato')->unsigned();
            $table->foreign('id_sindicato')->references('id')->on('sindicato')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id')->on('departamento')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('empleado');
    }
}
