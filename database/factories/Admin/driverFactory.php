<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\driver>
 */
class driverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre'=>$this->faker->firstName(),
            'tipoConductor'=>$this->faker->randomElement(['owner','rent']),
            'apliDateTime'=>$this->faker->dateTimeBetween('-1 year','now'),
            'fechaModif'=>$this->faker->dateTimeBetween('-1 year','now'),
            'carrier'=>$this->faker->company(),
            'telefono'=>$this->faker->phoneNumber(),
            'correo'=>$this->faker->email(),
            'truckOwner'=>$this->faker->randomElement(['YES','NO']),
            'referedBy'=>$this->faker->name(),
           'ultInspeccion'=>$this->faker->dateTimeBetween('-1 year','now'),
            'documentos'=>$this->faker->numberBetween(0,15),
            'camion'=>$this->faker->buildingNumber(),
            'clearingHouse'=>$this->faker->randomElement(['ch.pdf','ch1.pdf','ch2.pdf','ch3.pdf','ch4.pdf']),
            //
        ];
    }
}
