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
    Schema::create('miembro_grupo', function (Blueprint $table) {
        $table->id('id_miembro_grupo');
        $table->unsignedBigInteger('id_usuario');
        $table->unsignedBigInteger('id_grupo');
        $table->dateTime('fecha_union')->useCurrent();

        $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembro_grupo');
    }
};
