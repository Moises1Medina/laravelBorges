<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aspirante>
 */
class AspiranteFactory extends Factory
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
            'nombre'=>$this->faker->firstName(),
            'estado'=>$this->faker->randomElement(['APROBADO','PENDIENTE','RECHAZADO']),
            'mvr'=>$this->faker->randomElement(['mvr1.jpg','mvr2.jpg','mvr3.jpg']),
            'fechaIngreso'=>$this->faker->dateTimeBetween('-1 year','now'),
            'fechaRevicion'=>$this->faker->dateTimeBetween('-1 year','now'),


        ];
    }
}
