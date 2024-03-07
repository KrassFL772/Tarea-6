<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grupos_robs', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->unsignedBigInteger('Usuarios_id')->unique(); //Creando llave foránea para la tabla Usuarios.
            $table->foreign('Usuarios_id')->references('id')->on('usuarios_robs'); //Referenciando a la tabla Usuarios.
            $table->unsignedBigInteger('Cursos_id')->unique(); //Creando llave foránea para la tabla Cursos.
            $table->foreign('Cursos_id')->references('id')->on('cursos_robs'); //Referenciando a la tabla Cursos.
            $table->char('Nivel', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos_robs');
    }
};
