<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Queue;
use App\Models\Receptionist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $doctors = Doctor::factory(5)->create();

        $receptionists = Receptionist::factory(3)->create();

        $patients = Patient::factory(20)->create();

        foreach ($patients as $index => $patient) {
            Queue::factory()->create([
                'patient_id' => $patient->id,
                'doctor_id' => $doctors->random()->id,
                'receptionist_id' => $receptionists->random()->id,
                'queue_number' => $index + 1,
            ]);
        }
    }
}