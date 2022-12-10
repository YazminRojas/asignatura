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
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->float('creditos', 2,0);
            $table->enum('tipo', ['Basica', 'Obligatoria','Ordinaria']);
            $table->string('curso',100);
            $table->string('semestre', 50);
            $table->bigInteger('id_docente')->unsigned();
            $table->bigInteger('id_grado')->unsigned();
            $table->foreign('id_docente')->references('id')->on('docentes');
            $table->foreign('id_grado')->references('id')->on('grados');
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
        Schema::dropIfExists('asignaturas');
    }
};
