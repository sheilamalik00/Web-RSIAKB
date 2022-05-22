<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function get_doctor($id)
    {
        $doctor = Doctor::where('specialist_doctor_id',$id)->get();
        return response()->json($doctor);
    }
}
