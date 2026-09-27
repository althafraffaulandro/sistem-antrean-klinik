<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Receptionist;
use Illuminate\Database\Eloquent\Factories\Factory;

class QueueFactory extends Factory
{
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'doctor_id' => null,
            'receptionist_id' => null,
            'queue_number' => fake()->unique()->numberBetween(1, 100),
            'registration_date' => fake()->date(),
            'status' => fake()->randomElement([
                'Menunggu',
                'Dipanggil',
                'Sedang Diperiksa',
                'Selesai',
            ]),
            'estimated_time' => fake()->dateTimeBetween('now', '+2 hours'),
        ];
    }
}