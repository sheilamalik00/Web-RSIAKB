<?php

namespace App\Http\Controllers\Api\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function get_doctor(Request $request)
    {
        //convert date to day
        $day = $request->tgl_berobat;
        $day = Carbon::parse($day)->format('l');
        // dd($day);
        $doctor = Doctor::where('specialist_doctor_id',$request->specialist)->whereRelation('get_schedule_doctor','practice_day',$day)->get();
        return response()->json($doctor);
    }
}
