<?php

namespace Database\Seeders;

use App\Models\Aspirante;
use App\Models\Cita;
use App\Models\Solicitud;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ]);

        \App\Models\Admin\driver::factory(30)->create();
        Aspirante::factory(30)->create();
        Solicitud::factory(10)->create();
        Cita::factory(10)->create();



    }


}
