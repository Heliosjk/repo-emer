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
    Schema::create('version_trabajo', function (Blueprint $table) {
        $table->id('id_version');
        $table->unsignedBigInteger('id_trabajo');
        $table->integer('numero_version');
        $table->text('contenido_texto');
        $table->string('ruta_imagen', 255);
        $table->string('ruta_documento', 255);
        $table->dateTime('fecha_subida')->useCurrent();
        $table->unsignedBigInteger('subido_por_usuario');
        $table->boolean('es_version_presentada')->default(false);

        $table->foreign('id_trabajo')->references('id_trabajo')->on('trabajos')->onDelete('cascade');
        $table->foreign('subido_por_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('version_trabajo');
    }
};
