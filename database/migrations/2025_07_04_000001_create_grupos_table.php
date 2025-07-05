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
    Schema::create('grupos', function (Blueprint $table) {
        $table->id('id_grupo');
        $table->string('nombre_grupo', 100);
        $table->dateTime('fecha_creacion')->useCurrent();
        $table->unsignedBigInteger('id_jefe_grupo');

        $table->foreign('id_jefe_grupo')->references('id_usuario')->on('usuarios')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
