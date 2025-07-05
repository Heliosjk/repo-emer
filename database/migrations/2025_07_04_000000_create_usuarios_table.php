<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('usuarios', function (Blueprint $table) {
        $table->id('id_usuario');
        $table->string('nombre', 100);
        $table->string('apellido', 100);
        $table->string('email', 255)->unique();
        $table->string('password_hash', 255);
        $table->enum('rol', ['estudiante', 'jefe_grupo', 'docente']);
        $table->timestamp('fecha_registro')->useCurrent();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
