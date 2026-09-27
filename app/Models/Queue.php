<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Queue extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'receptionist_id',
        'queue_number',
        'registration_date',
        'status',
        'estimated_time',
    ];

    protected $casts = [
        'registration_date' => 'date',
        'estimated_time' => 'datetime',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function receptionist(): BelongsTo
    {
        return $this->belongsTo(Receptionist::class);
    }
}