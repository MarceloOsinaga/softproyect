<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',80);
            $table->string('parentesco',40);
            $table->integer('ci');
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
        Schema::dropIfExists('familia');
    }
}
