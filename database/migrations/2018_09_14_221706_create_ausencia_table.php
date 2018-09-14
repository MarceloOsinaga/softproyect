<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAusenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ausencia', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechadesde');
            $table->date('fechahasta');
            $table->string('descripcion',200);
            $table->integer('cantidad');
            $table->string('unidadmedida',200);
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id')->on('empleado')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('id_causa')->unsigned();
            $table->foreign('id_causa')->references('id')->on('causa')
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
        Schema::dropIfExists('ausencia');
    }
}
