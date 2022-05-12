<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistDoctor extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug'];

    public function get_doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}