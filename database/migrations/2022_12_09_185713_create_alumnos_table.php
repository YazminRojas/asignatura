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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('numeroControl', 10);
            $table->string('nombre', 30);
            $table->string('apellidoMaterno', 30);
            $table->string('apellidoPaterno', 30);
            $table->string('ciudad', 25);
            $table->string('direccion', 50);
            $table->string('telefono', 10);
            $table->date('fechaNacimiento');
            $table->enum('sexo', ['H','M']);
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
        Schema::dropIfExists('alumnos');
    }
};
