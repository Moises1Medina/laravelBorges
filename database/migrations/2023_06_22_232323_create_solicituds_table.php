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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreConductor')->nullable(false);
            $table->string('tipo')->nullable(false);
            $table->date('fechaSolicitud')->nullable(false);
            $table->string('correo')->nullable(false);
            $table->string('documento');
            $table->string('descripcion');
            $table->string('estado');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
