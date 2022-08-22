<?php

namespace App\Http\Controllers\Backend\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GalleryControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = Galeri::select('*');
            // dd($kategori);
            return DataTables::of($kategori)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    //form delete
                    $formdelete = '<form action="' . route('admin.gallery.destroy', $row->id) . '" method="POST">' . csrf_field() . method_field("DELETE") . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i> Hapus</button></form>';
                    //form edit
                    $formedit = '<a href="' . route('admin.gallery.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';
                    $btn = $formedit . '
                        <br/>
                        ' . $formdelete . '';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
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
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $gallery = Galeri::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'url' => $request->url,
        ]);
        if($request->type==2){
            if($request->file('file')){
                $file = $request->file('file');
                $file->storeAs('public/gallery/', $file->hashName());
                //simpan icon database
                $gallery->update([
                    'image' => $file->hashName()
                ]);
            }
        }else{
            if ($request->file('file')) {
                $file = $request->file('file');
                $file->storeAs('public/gallery/', $file->hashName());
                //simpan icon database
                $gallery->update([
                    'video' => $file->hashName()
                ]);
            }
        }
        if($gallery){
            return redirect()->route('admin.gallery.index')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect()->route('admin.gallery.index')->with('error', 'Data gagal ditambahkan');
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
        $gallery = Galeri::find($id);
        return view('backend.gallery.edit', compact('gallery'));
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
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $gallery = Galeri::find($id);
        $gallery->update([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'url' => $request->url,
        ]);
        if($request->file('file')){
            $file = $request->file('file');
            $file->storeAs('public/gallery/', $file->hashName());
            //simpan icon database
            $gallery->update([
                'file' => $file->hashName()
            ]);
        }
        if($gallery){
            return redirect()->route('admin.gallery.index')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect()->route('admin.gallery.index')->with('error', 'Data gagal ditambahkan');
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
        $gallery = Galeri::find($id);
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Data berhasil dihapus');
    }
}
