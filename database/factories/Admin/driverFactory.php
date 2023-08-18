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
            'birth'=>$this->faker->dateTimeBetween('-1 year','now'),
            'driverLicense'=>$this->faker->randomElement(['21091743','P22362085245','T622409972140','105428351','M635504944490']),
            'driverLicenseState'=>$this->faker->randomElement(['TEXAS','FLORIDA','NEVADA','KANSAS','ILLINOIS']),
            'driverLicenseDate'=>$this->faker->dateTimeBetween('-1 year','now'),
            'restriction'=>$this->faker->randomElement(['A','B','6','F']),
            'endorsement'=>$this->faker->randomElement(['PST ','N']),
            'driverStatus'=>$this->faker->randomElement(['Active','Inactive']),
            'apliDate'=>$this->faker->dateTimeBetween('-1 year','now'),
           'hiredDate'=>$this->faker->dateTimeBetween('-1 year','now'),
            'terminationDate'=>$this->faker->dateTimeBetween('-1 year','now'),
            'clearingHouse'=>$this->faker->randomElement(['ch.pdf','ch1.pdf','ch2.pdf','ch3.pdf','ch4.pdf']),
            //
        ];
    }
}
