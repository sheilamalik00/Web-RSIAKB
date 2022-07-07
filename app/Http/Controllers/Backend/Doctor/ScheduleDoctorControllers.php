<?php

namespace App\Http\Controllers\Backend\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\ScheduleDoctor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ScheduleDoctorControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $kategori = ScheduleDoctor::with('get_doctor')->get();
        // dd($kategori);
        if ($request->ajax()) {
            $kategori = ScheduleDoctor::with('get_doctor')->get();
            return DataTables::of($kategori)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    //form delete
                    $formdelete = '<form action="' . route('admin.schedule.destroy', $row->id) . '" method="POST">' . csrf_field() . method_field("DELETE") . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i> Hapus</button></form>';
                    //form edit
                    $formedit = '<a href="' . route('admin.schedule.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';
                    $btn = $formedit . '
                        <br/>
                        ' . $formdelete . '';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::with('get_specialist_doctor')->get();
        return view('backend.schedule.create', compact('doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'doctor_id' => 'required',
            'schedule_day' => 'required',
        ]);
        $doctor = Doctor::find($request->doctor_id);
        $schedule = ScheduleDoctor::create([
            'doctor_id' => $request->doctor_id,
            'doctor_name' => $doctor->name,
                'practice_day' => $request->schedule_day,
                'practice_time' => $request->time_first.'-'.$request->time_last,
        ]);
        if($schedule){
            return redirect()->route('admin.schedule.index')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect()->route('admin.schedule.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = ScheduleDoctor::where('id', $id)->first();
        $doctor = Doctor::all();
        return view('backend.schedule.edit', compact('schedule', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'doctor_id' => 'required',
            'schedule_day' => 'required',
            'schedule_time' => 'required',
        ]);
        $schedule = ScheduleDoctor::find($id);
        $schedule->update([
            'doctor_id' => $request->doctor_id,
            'practice_day' => $request->schedule_day,
            'practice_time' => $request->schedule_time,
        ]);
        if($schedule){
            return redirect()->route('admin.schedule.index')->with('success', 'Data berhasil diubah');
        }else{
            return redirect()->route('admin.schedule.index')->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = ScheduleDoctor::find($id);
        $schedule->delete();
        if($schedule){
            return redirect()->route('admin.schedule.index')->with('success', 'Data berhasil dihapus');
        }else{
            return redirect()->route('admin.schedule.index')->with('error', 'Data gagal dihapus');
        }
    }
}
