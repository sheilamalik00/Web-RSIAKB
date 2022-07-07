<?php

namespace App\Http\Controllers\Backend\Patient;

use App\Http\Controllers\Controller;
use App\Models\PatientRegister;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PatientRegisterControllers extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = PatientRegister::select('*');
            // dd($kategori);
            return DataTables::of($kategori)
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.patient.index');
    }
}
