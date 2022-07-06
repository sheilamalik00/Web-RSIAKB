<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'phone',
        'email',
        'nik',
        'no',
        'birth',
        'doctor_id',
        'doctor_name',
        'treatment_date',
    ];
}
