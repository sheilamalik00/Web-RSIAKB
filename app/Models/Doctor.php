<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'specialist_doctor_id',
    ];

    public function get_specialist_doctor()
    {
        return $this->belongsTo(SpecialistDoctor::class,'specialist_doctor_id','id');
    }

    public function get_schedule_doctor()
    {
        return $this->hasMany(ScheduleDoctor::class);
    }

    public function get_image()
    {
        return $this->image ? asset('storage/doctor/'.$this->image) : asset('img/no-image.png');
    }
}
