<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(); // Nombre completo
            $table->string('apellido_paterno')->nullable(); // Primer nombre
            $table->string('apellido_materno')->nullable(); // Apellido
            $table->string('ci')->unique()->nullable(); // Carnet de identidad
            $table->string('telefono', 15)->nullable(); // Número de teléfono
            $table->date('fecha_nacimiento')->nullable(); // Fecha de nacimiento
            $table->string('correo')->unique()->nullable(); // Correo electrónico
            $table->string('disciplina')->nullable(); // Disciplina deportiva
            $table->string('plan')->nullable(); // Plan de entrenamiento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
