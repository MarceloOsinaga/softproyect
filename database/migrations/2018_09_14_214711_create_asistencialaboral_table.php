<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistencialaboralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencialaboral', function (Blueprint $table) {
            $table->increments('id');
            $table->time('horaingreso');
            $table->time('horasalida');
            $table->date('fecha');
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id')->on('empleado')
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
        Schema::dropIfExists('asistencialaboral');
    }
}
