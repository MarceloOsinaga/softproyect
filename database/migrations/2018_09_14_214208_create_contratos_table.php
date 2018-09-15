<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->time('horaingreso');
            $table->time('horasalida');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->double('salario');
            $table->string('turnotrabajo');
            $table->integer('id_tipocontrato')->unsigned();
            $table->foreign('id_tipocontrato')->references('id')->on('tipocontratos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id')->on('empleados')
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
        Schema::dropIfExists('contratos');
    }
}
