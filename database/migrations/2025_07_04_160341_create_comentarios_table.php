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
    Schema::create('comentarios', function (Blueprint $table) {
        $table->id('id_comentario');
        $table->unsignedBigInteger('id_presentacion');
        $table->unsignedBigInteger('id_docente');
        $table->text('texto_comentario');
        $table->dateTime('fecha_comentario')->useCurrent();
        $table->string('seccion_afectada', 100)->nullable();

        $table->foreign('id_presentacion')->references('id_presentacion')->on('presentacion_trabajo')->onDelete('cascade');
        $table->foreign('id_docente')->references('id_usuario')->on('usuarios')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
