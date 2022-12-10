<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_alumno')->unsigned();
            $table->bigInteger('id_asignatura')->unsigned();
            $table->bigInteger('id_curso_escolar')->unsigned();
            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('id_asignatura')->references('id')->on('asignaturas');
            $table->foreign('id_curso_escolar')->references('id')->on('curso_escolars');
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
        Schema::dropIfExists('matriculas');
    }
};
