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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            /* especificando que es unico unique */
            $table->unsignedBigInteger('persona_id')->unique()->nullable('persona_id');
            /* restricion de llave foranea , la referencia, indicando a que tabla */ /* onDelete('cascade cuando se elimine la el registro de personas tambien se eliminaria el de clientes' and 'set null el valor del persona estara nulo') */ /* cascade es para actualizar el id en las dos tablas si hay algun cambio */
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
