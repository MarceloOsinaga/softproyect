<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ci');
            $table->string('nombre',80);
            $table->string('apaterno',80);
            $table->string('amaterno',80);
            $table->date('fechanac');
            $table->char('sexo');
            $table->string('nacionalidad',80);
            $table->string('direccion',200);
            $table->integer('telefono');
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
        Schema::dropIfExists('personas');
    }
}
