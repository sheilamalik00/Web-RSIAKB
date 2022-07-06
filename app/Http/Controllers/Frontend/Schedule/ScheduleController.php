<?php

namespace App\Http\Controllers\Frontend\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\PatientRegister;
use App\Models\SpecialistDoctor;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $dokter = Doctor::with('get_specialist_doctor')->get();
        $blog = Blog::latest()->limit(2)->get();
        $doctor = Doctor::latest()->limit(3)->get();
        // $doctors = Doctor::all();
        $specialist = SpecialistDoctor::all();
        return view('frontend.schedule.index',compact('blog','doctor','dokter','specialist'));
        // return view('frontend.schedule.index', compact('dokter'));
        // return view('frontend.schedule.index');
    }
    public function registerShecdule(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'nophone' => 'required',
            'noktp' => 'required',
            'tgl_lahir' => 'required',
            'doctor' => 'required',
            'poli' => 'required',
            'tgl_berobat' => 'required',
        ]);

        $specialist = SpecialistDoctor::find($request->poli);
        $doctor = Doctor::find($request->doctor);
        $patient = PatientRegister::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->nophone,
            'nik' => $request->noktp,
            'birth' => $request->tgl_lahir,
            'doctor_id' => $request->doctor,
            'doctor_name' => $doctor->name,
            'treatment_date' => $request->tgl_berobat,
        ]);
        if ($patient) {
            return redirect()->back()->with('success', 'Pendaftaran Berhasil');
        } else {
            return redirect()->back()->with('error', 'Pendaftaran Gagal');
        }
        // $specialist = SpecialistDoctor::find($request->poli);
        // $doctor = Doctor::find($request->doctor);
        // // $doctor = $request->dokter;
        // $tgl_lahir = $request->tgl_lahir;
        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->nophone;
        // $noktp = $request->noktp;
        // $tgl_berobat = $request->tgl_berobat;
    }
}
