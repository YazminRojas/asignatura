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
            $table->enum('tipo', ['Básica', 'Obligatoria','Ordinaria']);
            $table->tinyInteger('curso');
            $table->tinyInteger('semestre');
            $table->foreign("id_docente");
            $table->foreign("id_grado");
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
