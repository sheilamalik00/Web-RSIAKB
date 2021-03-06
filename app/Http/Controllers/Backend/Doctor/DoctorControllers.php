<?php

namespace App\Http\Controllers\Backend\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\DoctorRequest;
use App\Models\Doctor;
use App\Models\SpecialistDoctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DoctorControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = Doctor::select('doctors.*', 'specialist_doctors.name as SpNama')->join('specialist_doctors', 'doctors.specialist_doctor_id', '=', 'specialist_doctors.id');
            // dd($kategori);
            return DataTables::of($kategori)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    //form delete
                    $formdelete = '<form action="' . route('admin.doctor.destroy', $row->id) . '" method="POST">' . csrf_field() . method_field("DELETE") . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i> Hapus</button></form>';
                    //form edit
                    $formedit = '<a href="' . route('admin.doctor.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';
                    $btn = $formedit . '
                        <br/>
                        ' . $formdelete . '';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.doctor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialist = SpecialistDoctor::all();
        return view('backend.doctor.create', compact('specialist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'specialist' => 'required',
        ]);
        // $doctor = Doctor::create($request->all());
        $doctor = Doctor::create([
            'name' => $request->name,
            'specialist_doctor_id' => $request->specialist,
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $image->storeAs('public/doctor/', $image->hashName());
            //simpan icon database
            $doctor->update([
                'image' => $image->hashName()
            ]);
        }
        if($doctor){
            return redirect()->route('admin.doctor.index')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect()->route('admin.doctor.index')->with('error', 'Data gagal ditambahkan');
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
        $doctor = Doctor::find($id);
        $specialist = SpecialistDoctor::all();
        return view('backend.doctor.edit', compact('doctor', 'specialist'));
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
            'name' => 'required|string|max:255',
            'specialist' => 'required',
        ]);
        $doctor = Doctor::find($id);
        $doctor->update([
            'name' => $request->name,
            'specialist_doctor_id' => $request->specialist,
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $image->storeAs('public/doctor/', $image->hashName());
            //hapus icon lama
            $oldImage = $doctor->image;
            if(Storage::disk('public')->exists('doctor/' . $oldImage)){
                Storage::disk('public')->delete('doctor/' . $oldImage);
            }
            //simpan icon database
            $doctor->update([
                'image' => $image->hashName()
            ]);
        }
        if($doctor){
            return redirect()->route('admin.doctor.index')->with('success', 'Data berhasil diubah');
        }else{
            return redirect()->route('admin.doctor.index')->with('error', 'Data gagal diubah');
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
        $doctor = Doctor::find($id);
        $oldImage = $doctor->image;
        if(Storage::disk('public')->exists('doctor/' . $oldImage)){
            Storage::disk('public')->delete('doctor/' . $oldImage);
        }
        $doctor->delete();
        if($doctor){
            return redirect()->route('admin.doctor.index')->with('success', 'Data berhasil dihapus');
        }else{
            return redirect()->route('admin.doctor.index')->with('error', 'Data gagal dihapus');
        }
        // return redirect()->route('admin.doctor.index')->with('success', 'Data berhasil dihapus');
    }
}
