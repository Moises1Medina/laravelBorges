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
        Schema::create('drivers', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('nombre')->nullable(false);
            $table->string('tipoConductor')->nullable(false);
            $table->date('apliDateTime')->nullable(false);
            $table->date('fechaModif');
            $table->string('carrier');
            $table->string('telefono');
            $table->string('correo')->nullable(false);
            $table->string('truckOwner');
            $table->string('referedBy');
            $table->date('ultInspeccion');
            $table->integer('documentos')->default(0);
            $table->string('camion');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver');
    }
};
