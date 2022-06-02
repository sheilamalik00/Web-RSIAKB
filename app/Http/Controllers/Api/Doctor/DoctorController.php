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
        $day = $request->day;
        $day = Carbon::parse($day)->format('l');

        $doctor = Doctor::where('specialist_doctor_id',$request->specialist)->whereRelation('schedule_doctors',function($query) use ($day){
            $query->where('practice_day',$day);
        })->get();
        dd($doctor);
        return response()->json($doctor);
    }
}
