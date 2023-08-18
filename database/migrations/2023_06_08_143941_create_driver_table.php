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
            $table->date('birth')->nullable(false);
            $table->string('driverLicense')->nullable(false);
            $table->string('driverLicenseState');
            $table->date('driverLicenseDate');
            $table->string('restriction');
            $table->string('endorsement');
            $table->string('driverStatus');
            $table->date('apliDate');
            $table->date('hiredDate');
            $table->date('terminationDate');
            $table->string('clearingHouse');



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
