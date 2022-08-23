<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDoctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'doctor_name',
        'practice_day',
        'practice_time',
    ];


    public function get_doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

    public function convert_date_to_day()
    {
        $day = $this->practice_day;
        $day = str_replace('0', 'Minggu', $day);
        $day = str_replace('1', 'Senin', $day);
        $day = str_replace('2', 'Selasa', $day);
        $day = str_replace('3', 'Rabu', $day);
        $day = str_replace('4', 'Kamis', $day);
        $day = str_replace('5', 'Jumat', $day);
        $day = str_replace('6', 'Sabtu', $day);
        return $day;
    }

    public function get_monday()
    {
        if($this->practice_day == 'Monday')
        {
            return $this->doctor_name;
        }else{
            return "-";
        }
    }
}
