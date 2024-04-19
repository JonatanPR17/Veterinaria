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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('apellido_paterno',100);
            $table->string('apellido_materno',100);
            $table->string('fecha_nacimiento');
            $table->string('direccion',255)->nullable();
            $table->string('usuario',100)->unique();
            $table->string('contraseña',50);
            $table->string('categoria_persona');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
