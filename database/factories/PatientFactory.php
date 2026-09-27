<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nik' => fake()->numerify('################'),
            'phone' => '08' . fake()->numerify('##########'),
        ];
    }
}