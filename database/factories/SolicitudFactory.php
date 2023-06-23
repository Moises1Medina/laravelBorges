<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombreConductor'=>$this->faker->firstName(),
            'tipo'=>$this->faker->randomElement(['MVR','DRUG TEST','LICENCE']),
            'fechaSolicitud'=>$this->faker->dateTimeBetween('-1 year','now'),
            'correo'=>$this->faker->email(),
            'documento'=>$this->faker->randomElement(['drugTest.pdf','mvr.pdf','licence.pdf']),
            'descripcion'=>$this->faker->text(),
            'estado'=>$this->faker->randomElement(['APROBADO','PENDIENTE','RECHAZADO']),


        ];
    }
}
