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
    Schema::create('presentacion_trabajo', function (Blueprint $table) {
        $table->id('id_presentacion');
        $table->unsignedBigInteger('id_trabajo');
        $table->unsignedBigInteger('id_jefe_grupo');
        $table->dateTime('fecha_presentacion')->useCurrent();
        $table->enum('estado', ['presentado', 'devuelto', 'aprobado', 'calificado']);

        $table->foreign('id_trabajo')->references('id_trabajo')->on('trabajos')->onDelete('cascade');
        $table->foreign('id_jefe_grupo')->references('id_usuario')->on('usuarios')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presentacion_trabajo');
    }
};
