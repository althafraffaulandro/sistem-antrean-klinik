<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReceptionistFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
        ];
    }
}