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
            'name'=>$this->faker->firstName(),
            'company'=>$this->faker->randomElement(['Highway','California','Florida']),
            'driverType'=>$this->faker->randomElement(['Fleet Driver','Owner Operator']),
            'apliStatus'=>$this->faker->randomElement(['Other','Hired','Active']),
            'apliDate'=>$this->faker->dateTimeBetween('-1 year','now'),
            'notes'=>$this->faker->text(),
            'documento'=>$this->faker->randomElement(['mv.pdf','mv1.pdf','mv2.pdf','mv3.pdf','mv4.pdf']),
            'status'=>$this->faker->randomElement(['INACTIVE','ACTIVE']),
            


        ];
    }
}
