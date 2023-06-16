<?php

namespace Database\Seeders;

use App\Models\Aspirante;
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


    }


}
