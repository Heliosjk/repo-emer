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
    Schema::create('trabajos', function (Blueprint $table) {
        $table->id('id_trabajo');
        $table->string('titulo', 255);
        $table->text('descripcion');
        $table->dateTime('fecha_asignacion');
        $table->dateTime('fecha_entrega_limite');
        $table->unsignedBigInteger('id_grupo');
        $table->unsignedBigInteger('id_docente_asignado');

        $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
        $table->foreign('id_docente_asignado')->references('id_usuario')->on('usuarios')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajos');
    }
};
