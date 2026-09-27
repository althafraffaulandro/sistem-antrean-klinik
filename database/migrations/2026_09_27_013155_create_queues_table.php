<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')
                ->constrained('patients')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('doctor_id')
                ->nullable()
                ->constrained('doctors')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('receptionist_id')
                ->nullable()
                ->constrained('receptionists')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->unsignedInteger('queue_number');
            $table->date('registration_date');
            $table->string('status')->default('Menunggu');
            $table->dateTime('estimated_time')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('queues');
    }
};