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

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

         User::factory()->create([
            'name' => 'Adm',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ])->assignRole('Admin');


        \App\Models\Admin\driver::factory(30)->create();
        Aspirante::factory(30)->create();
        Solicitud::factory(10)->create();
        Cita::factory(10)->create();



    }


}
