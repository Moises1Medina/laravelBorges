<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cita>
 */
class CitaFactory extends Factory
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

            'driver'=>$this->faker->firstName(),
            'fechaCita'=>$this->faker->dateTimeBetween('-1 year','now'),
            'estado'=>$this->faker->randomElement(['FINALIZADA','PENDIENTE']),


        ];
    }
}
