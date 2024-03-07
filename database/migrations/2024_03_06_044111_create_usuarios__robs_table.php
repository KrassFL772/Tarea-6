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
        Schema::create('usuarios_robs', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('Username', 40);
            $table->string('Email', 40);
            $table->string('Password', 45);
            $table->string('Rol', 30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_robs');
    }
};
