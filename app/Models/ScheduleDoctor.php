<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDoctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'practice_day',
        'practice_time',
    ];
}
