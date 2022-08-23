<?php

namespace App\Http\Controllers\Frontend\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\ScheduleDoctor;
use App\Models\SpecialistDoctor;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        $specialist = SpecialistDoctor::all();
        $blog = Blog::latest()->limit(2)->get();
        $doctorjadwal= Doctor::with('get_schedule_doctor')->with('get_specialist_doctor')->get();
        // $doctorjadwal = ScheduleDoctor::with('get_doctor.get_specialist_doctor')->groupBy('practice_day')->get();
        // dd($doctorjadwal);
        return view('frontend.doctor.index', compact('doctor', 'specialist', 'blog', 'doctorjadwal'));
        // return view('frontend.doctor.index',compact('doctor','specialist','blog'));

        // return view('frontend.doctor.index',compact('doctor'));
    }

    public function kirimJadwal(Request $request)
    {

        // $curl= curl_init();
        // dd($request->all());
        $specialist = SpecialistDoctor::find($request->poli);
        $doctor = Doctor::find($request->doctor);
        // $doctor = $request->dokter;
        $tgl_lahir = $request->tgl_lahir;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->nophone;
        $noktp = $request->noktp;
        $tgl_berobat = $request->tgl_berobat;
        // dd($doctor);
        return redirect('https://api.whatsapp.com/send?phone=6287741393767&text=Nama:' . $name . '%0ANo KTP: '.$noktp.' %0A Tanggal Lahir Pasien: '.$tgl_lahir. '%0AEmail:'.$email. '%0ATanggal Berobat : '.$tgl_berobat. '%0A Nomor HP:'.$phone. '%0APoli:'.$specialist->name. '%0A Doktor:'.$doctor->name);
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://api.whatsapp.com/send?phone=6287741393767&
        //     text=Nama%253A%2520'.$name.'%250D%250A
        //     No%2520KTP%253A%2520Nomor%250D%250A
        //     Tanggal%2520Lahir%2520Pasien%253A%2520TGL%250D%250A
        //     Email%253A%2520Email%250D%250A
        //     Tanggal%2520Berobat%253A%2520TGL%250D%250A
        //     Nomor%2520HP%253A%2520YY%250D%250A
        //     Poli%253A%2520UU%250D%250A
        //     Doktor%253A%2520II',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
    }
}
